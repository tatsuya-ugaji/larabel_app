<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\BalanceOfPaymentRequest as BoPRequest;

class BudgetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('spRedirect');
    }

    public function register(Request $request)
    {
        $user = Auth::user();
        $date = Carbon::now();
        for ($i=0; $i < 10 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        $category = Category::getCategory($user->id);
        $param = [
            'user' => $user,
            'category' => $category,
            'date' => $date,
            'years' => $years,
            'param' => null,
        ];
        return view('budget.register',$param);
    }

    public function create(BoPRequest $request)
    {
        // $this->validate($request,Budget::$rules);
        $budget = new Budget;
        $form = $request->all();
        unset($form['_token']);
        array_splice($form,6,8);
        $date = new Carbon($request->date);
        $repeat_date = $request->year . '-' . $request->month . '-1';
        $repeat_date = new Carbon($repeat_date);
        $date = new Carbon($request->actual_date);
        $repeat_date = $date->diffInMonths($repeat_date) + 1;
        //フォームの毎月発生するにチェックが付いていたら、フォームの年月までインスタンスを作成＆保存する。
        if($request->repeat == 1){
            for ($i=0; $i <= $repeat_date; $i++) {
                if($i > 0){
                    $date = $date->addMonth();
                    $strDate = $date->toDateString();
                    $form['actual_date'] = $strDate;
                    $budget = new Budget;
                }
                $budget->fill($form)->save();
            }
        } else{
            $budget->fill($form)->save();
        }

        return redirect('/home');
    }

    public function edit(Request $request,$id)
    {
        $budget = Budget::find($id);
        $user = Auth::user();
        $date = new Carbon($budget->date);
        $category = Category::getCategoryEdit($user->id,$budget->category);
        $params = [
            'param' => $budget,
            'user' => $user,
            'category' => $category,
            'date' => $date,
        ];
        return view('budget.edit',$params);
    }

    public function update(BoPRequest $request,$id)
    {
        $budget = Budget::find($id);
        // $this->validate($request,Budget::$rules);
        $form = $request->all();
        unset($form['_token']);
        unset($form['repeat']);
        $budget->fill($form)->save();
        return redirect('/home');
    }

    public function show(Request $request,$year,$month)
    {
        $user = Auth::user();
        $date = $year . '-' . $month . '-1';
        $date = new Carbon($date);
        //年月選択のセレクトボックスの値を配列に格納（前後５年間）
        for ($i=-5; $i < 6 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        //該当月の予算を取得
        $budgets = Budget::userByMonth($date->year,$date->month,$user->id)
                         ->orderBy('actual_date', 'asc')->get();
        $params = [
            'items' => $budgets,
            'date' => $date,
            'years' => $years,
        ];
        return view('budget/show',$params);
    }
}
