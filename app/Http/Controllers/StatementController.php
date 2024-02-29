<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatementController extends Controller
{

    public function store(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'car_number' => 'required | alpha',
            'description' => 'required | alpha'
        ]);
        Statement::create(['user_id'=>$user->id]+$data);
        return redirect()->route('home');
    }


    /**
     * Display a listing of the resource.
     */
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
    public function show(Statement $statement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statement $statement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statement $statement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statement $statement)
    {
        //
    }
}
