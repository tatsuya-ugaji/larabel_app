<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actual;
use App\Budget;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BalanceOfPaymentRequest as BoPRequest;

class ActualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('spRedirect')->except(['register','create','edit','update']);
    }

    public function register(Request $request)
    {
        $user = Auth::user();
        $date = Carbon::now();
        $category = Category::getCategory($user->id);
        $params = [
            'user' => $user,
            'category' => $category,
            'date' => $date,
            'param' => null,
        ];
        return view('actual.register',$params);
    }

    public function create(BoPRequest $request)
    {
        // $this->validate($request,Actual::$rules);
        $actual = new Actual;
        $form = $request->all();
        unset($form['_token']);
        $actual->fill($form)->save();
        return redirect('/home');
    }

    public function edit(Request $request,$id)
    {
        $actual = Actual::find($id);
        $user = Auth::user();
        $date = new Carbon($actual->date);
        $category = Category::getCategoryEdit($user->id, $actual->category);
        $params = [
            'param' => $actual,
            'user' => $user,
            'category' => $category,
            'date' => $date,
        ];
        return view('actual.edit',$params);
    }

    public function update(BoPRequest $request,$id)
    {
        $actual = Actual::find($id);
        // $this->validate($request,Actual::$rules);
        $form = $request->all();
        unset($form['_token']);
        $actual->fill($form)->save();
        return redirect('/home');
    }

    public function by_month(Request $request,$year,$month)
    {
        $user = Auth::user();
        $date = $year . '-' . $month . '-1';
        $date = new Carbon($date);
        //年月選択のセレクトボックスの値を配列に格納（前後５年間）
        for ($i=-5; $i < 6 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        // $actuals = DB::table('actuals')
        //         ->select(DB::raw('sum(amount) as amount, category'))
        //         ->where('user_id', $user->id)
        //         ->groupBy('category')
        //         ->get();
        $categories = DB::table('categories')
                    ->where('user_id',$user->id)->get();
        $bp = [];
        //カテゴリごとに、カテゴリ名、予算、実績、実績と予算の差額を配列に格納
        foreach($categories as $category){
            $name = $category->name;
            $bp_flg = $category->bp_flg;
            $budget = Budget::categoryTotalMonth($year,$month,$user->id,$name);
            $actual = Actual::categoryTotalMonth($year,$month,$user->id,$name);
            if($bp_flg == 0){
                $difference = $actual - $budget;
            }else{
                $difference = $budget - $actual;
            }
            $bp[] = [$name,$budget,$actual,$difference,$bp_flg];
        }
        //該当月の予算合計（収入ー支出）
        $b_total = Budget::getBudgetTotalMonth($date,$user);
        //該当月の実績合計（収入ー支出）
        $a_total = Actual::getActualTotalMonth($date,$user);
        $total = [
            'b_total' => $b_total,
            'a_total' => $a_total,
            'd_total' => $b_total - $a_total,
        ];
        $param = [
            'date' => $date,
            'bp' => $bp,
            'years' => $years,
            'total' => $total,
        ];
        return view('actual.by_month', $param);
    }

    public function by_year(Request $request,$year)
    {
        $user = Auth::user();
        $date = $year . '-' . session()->get('month') . '-1';
        $date = new Carbon($date);
        for ($i=-5; $i < 6 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        //月ごとに収入合計、支出合計、貯金額、貯金累計を配列に格納
        for ($i=1; $i <= 12 ; $i++) {
            $income[$i] = Actual::BPTotalByMonth($date->year,$i,$user->id,0);
            $expenses[$i] = Actual::BPTotalByMonth($date->year,$i,$user->id,1);
            $difference[$i] = $income[$i] - $expenses[$i];
            $a = $i - 1;
            if ($a == 0) {
                $total[$i] = $difference[$i];
            } else{
                $total[$i] = $total[$a] + $difference[$i];
            }
        }
        $param = [
            'date' => $date,
            'years' => $years,
            'income' => $income,
            'expenses' => $expenses,
            'difference' => $difference,
            'total' => $total,
        ];
        return view('actual.by_year', $param);
    }

    public function chartItems(Request $request,$year,$month)
    {
        $user = Auth::user();
        $date = $year . '-' . $month . '-1';
        $date = new Carbon($date);
        $categories = DB::table('categories')->where('user_id',$user->id)->get();
        foreach($categories as $category){
            $n = $category->name;
            $name[] = $category->name;
            $budget[] = Budget::categoryTotalMonth($year,$month,$user->id,$n);
            $actual[] = Actual::categoryTotalMonth($year,$month,$user->id,$n);
        }
        $params = [
            'name' => $name,
            'budget' => $budget,
            'actual' => $actual,
        ];
        return $params;
    }
}
