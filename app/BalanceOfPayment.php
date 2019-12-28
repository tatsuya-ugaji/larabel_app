<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalanceOfPayment extends Model
{
    // public static $rules = [
    //     'user_id' => 'required',
    //     'category' => 'required',
    //     'actual_date' => 'required|date',
    //     'bp_flg' => 'boolean',
    //     'amount' => 'required|integer',
    // ];

    public function scopeUserByYear($query, $year, $id)
    {
        return $query->where('user_id', id)
                     ->whereYear('actual_date',$year);
    }

    public function scopeUserByMonth($query, $year, $month, $id)
    {
        return $query->where('user_id', $id)
                     ->whereYear('actual_date',$year)
                     ->whereMonth('actual_date',$month);
    }

    public function scopeTotalMonth($query, $year, $month, $id ,$bp_flag)
    {
        return $query->where('user_id', $id)
                     ->whereYear('actual_date',$year)
                     ->whereMonth('actual_date',$month)
                     ->where('bp_flg',$bp_flag)
                     ->sum('amount');
    }

    public function scopeCategoryTotalMonth($query, $year, $month, $id, $category){
        return $query->where('user_id', $id)
                     ->whereYear('actual_date',$year)
                     ->whereMonth('actual_date',$month)
                     ->where('category', $category)->sum('amount');
    }

    public function scopeBPTotalByMonth($query,$year,$month,$id,$bp_flag)
    {
        return $query->where('user_id', $id)
                     ->whereYear('actual_date',$year)
                     ->whereMonth('actual_date',$month)
                     ->where('bp_flg', $bp_flag)->sum('amount');
    }

}
