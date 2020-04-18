<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    public static function getAll () {
        $payments = DB::table('payments')
            ->select('payments.id', 'contracts.id as contract', 'payments.amount', 'payments.created_at')
            ->join('contracts', 'contracts.id', '=', 'payments.contract_id')
            ->get();

        return $payments;
    }

    public static function getCount () {

        $payments= DB::table('payments')->count();

        return $payments;
    }
}
