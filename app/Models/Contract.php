<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contract extends Model
{
    protected $fillable = [
        'tariff_id',
        'start_date',
        'end_date',
        'status'
    ];

    public static function getAll () {
        $contracts = DB::table('contracts')
            ->select('contracts.id', 'users.email', 'tariffs.name', 'contracts.start_date', 'contracts.end_date', 'contracts.status')
            ->join('users', 'users.id', '=', 'contracts.user_id')
            ->join('tariffs', 'tariffs.id', '=', 'contracts.tariff_id')
            ->get();

        return $contracts;
    }

    public static function getCount () {

        $contracts = DB::table('contracts')->count();

        return $contracts;
    }
}
