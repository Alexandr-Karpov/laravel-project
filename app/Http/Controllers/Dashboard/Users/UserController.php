<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        $count = User::getCount();
        return view('dashboard.users.index', compact('users'))->with('count', $count);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $authUser = Auth::id();
        if($user['id'] == Auth::id())
        {
            session()->flash('warning', 'Вы не можите удалить сами себя!');
            return redirect()->route('dashboard.users.index');
        } else {
            return view('dashboard.users.blocks.confirm.index', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->only(['first_name', 'middle_name', 'last_name', 'phone', 'location', 'email', 'password']);

        if (isset($data['password']) && $data['password']) {
            $data['password'] = bcrypt($data['password']);
        }

        if (!isset($data['password'])) {
            unset($data['password']);
        }

        $user->update($data);

        session()->flash('success', 'Информация о пользователе успешно изменена!');

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', 'Пользователь успешно удалён из базы данных');

        return redirect()->route('dashboard.users.index');
    }

}
