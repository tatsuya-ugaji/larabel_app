<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BalanceOfPayment;

class Budget extends BalanceOfPayment
{
    protected $guarded = array('id');

    public static function getBudgetTotalMonth($date,$user)
    {
        $b_0_total = Budget::totalMonth($date->year,$date->month,$user->id,0);
        $b_1_total = Budget::totalMonth($date->year,$date->month,$user->id,1);
        $b_total = $b_0_total - $b_1_total;
        return $b_total;
    }
}
