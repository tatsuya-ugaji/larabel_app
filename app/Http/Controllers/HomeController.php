<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actual;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = Carbon::now();
        $user = Auth::user();
        session(['month' => $date->month]);
        //該当月の実績を取得
        $actuals = Actual::userByMonth($date->year,$date->month,$user->id)
                         ->orderBy('actual_date', 'asc')->get();
        //該当月の支出合計を取得
        $total = Actual::totalMonth($date->year,$date->month,$user->id,1);
        //年月選択のセレクトボックスの値を配列に格納（前後５年間）
        for ($i=-5; $i < 6 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        $params = [
            'items' => $actuals,
            'date' => $date,
            'total' => $total,
            'years' => $years,
        ];
        return view('home',$params);
    }

    public function postIndex(Request $request)
    {
        $year = $request->year;
        $month = $request->month;
        $date = $year . '-' . $month . '-1';
        $date = new Carbon($date);
        session(['month' => $date->month]);
        $user = Auth::user();
        $actuals = Actual::userByMonth($date->year,$date->month,$user->id)
                         ->orderBy('actual_date', 'asc')->get();
        $total = Actual::totalMonth($date->year,$date->month,$user->id,1);
        for ($i=-5; $i < 6 ; $i++) {
            $y = $date->year + $i;
            $years[] = $y;
        }
        $params = [
            'items' => $actuals,
            'date' => $date,
            'total' => $total,
            'years' => $years,
        ];
        return view('home',$params);
    }
}
