<?php

namespace App\Http\Controllers\Dashboard\Tariffs;

use App\Http\Controllers\Controller;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\Tariff\UpdateRequest;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tariffs = Tariff::getAll();
        $count = Tariff::getCount();
        return view('dashboard.tariffs.index', compact('tariffs'))->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tariffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateRequest $request)
    {
        $data = $request->only(['name', 'price', 'feature', 'service_id']);

        $tariff = Tariff::create($data);
        session()->flash('success', 'Тариф успешно создан!');

        return redirect()->route('dashboard.tariffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tariff  $tariff
     * @return \Illuminate\Http\Response
     */
    public function show(Tariff $tariff)
    {
        return view('dashboard.tariffs.blocks.confirm.index', compact('tariff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tariff  $tariff
     * @return \Illuminate\Http\Response
     */
    public function edit(Tariff $tariff)
    {
        return view('dashboard.tariffs.edit', compact('tariff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tariff  $tariff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Tariff $tariff)
    {
        $data = $request->only(['name', 'price', 'feature', 'service_id']);

        $tariff->update($data);

        session()->flash('success', 'Информация о тарифе успешно изменена!');

        return redirect()->route('dashboard.tariffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tariff  $tariff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tariff $tariff)
    {
        $tariff->delete();
        session()->flash('success', 'Тариф успешно удалён из базы данных');

        return redirect()->route('dashboard.tariffs.index');
    }
}
