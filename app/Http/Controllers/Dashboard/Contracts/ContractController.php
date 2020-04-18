<?php

namespace App\Http\Controllers\Dashboard\Contracts;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;
use App\Http\Requests\Contract\UpdateRequest;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::getAll();
        $count = Contract::getCount();
        return view('dashboard.contracts.index', compact('contracts'))->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        return view('dashboard.contracts.blocks.confirm.index', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        return view('dashboard.contracts.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Contract $contract)
    {
        $data = $request->only(['start_date', 'end_date', 'status']);

        $contract->update($data);

        session()->flash('success', 'Информация о контракте успешно изменена!');

        return redirect()->route('dashboard.contracts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();
        session()->flash('success', 'Контракт успешно удалён из базы данных');

        return redirect()->route('dashboard.contracts.index');
    }
}
