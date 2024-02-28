<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        User::create($request->all());
        return redirect()->route('home');
    }

    public function signin(Request $request){
        $data = $request->validate([
            'login' => 'required | alpha',
            'password' => 'required |min:6'
        ]);
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        }
        return redirect()->back(302)->with('error', 'Ошибка, неправильный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
