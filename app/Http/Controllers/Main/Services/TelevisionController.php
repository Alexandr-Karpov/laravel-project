<?php

namespace App\Http\Controllers\Main\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tariff;
use Illuminate\View\View;

class TelevisionController extends Controller
{
    public function index () :view
    {
        $tariffs = Tariff::getTariffs('Телевидение');

        return view('main.tv', compact('tariffs'));
    }
}
