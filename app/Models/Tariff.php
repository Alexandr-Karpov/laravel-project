<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tariff extends Model
{
    protected $fillable = [
        'name',
        'price',
        'service_id',
        'feature'
    ];
    public static function getTariffs ($service) {
        $tariffs = DB::table('tariffs')
            ->select('tariffs.id', 'tariffs.name', 'tariffs.price', 'services.general_feature', 'tariffs.feature')
            ->join('services', 'services.id', '=', 'tariffs.service_id')
            ->where('services.name', '=', $service)
            ->get();

        return $tariffs;
    }

    public static function getAll () {
        $tariffs = DB::table('tariffs')
            ->select('tariffs.id', 'tariffs.name', 'tariffs.price', 'services.general_feature', 'services.name as service', 'tariffs.feature')
            ->join('services', 'services.id', '=', 'tariffs.service_id')
            ->get();

        return $tariffs;
    }

    public static function getCount () {

        $tariffs = DB::table('tariffs')->count();

        return $tariffs;
    }
}
