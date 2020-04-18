<?php

namespace App\Http\Controllers\Main\Services;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InternetController extends Controller
{
    public function index () :view
    {
        $tariffs = Tariff::getTariffs('Домашний интернет');

        return view('main.internet', compact('tariffs'));
    }
}
