<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BalanceOfPayment;

class Actual extends BalanceOfPayment
{
    protected $guarded = array('id');

    public static function getActualTotalMonth($date,$user)
    {
        $a_0_total = Actual::totalMonth($date->year,$date->month,$user->id,0);
        $a_1_total = Actual::totalMonth($date->year,$date->month,$user->id,1);
        $a_total = $a_0_total - $a_1_total;
        return $a_total;
    }
}
