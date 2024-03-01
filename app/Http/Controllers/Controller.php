<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        return view('signup-form');
    }
    public function main()
    {
        $state = Statement::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(2);
        return view('welcome')->with('data',$state);
    }
    public function mainAdmin()
    {
        $state = Statement::orderBy('id','DESC')->paginate(2);
        return view('welcomeAdmin')->with('data',$state);
    }
    public function signupForm()
    {
        return view('signup-form');
    }
    public function signinForm()
    {
        return view('signin-form');
    }
    public function statementForm()
    {
        return view('statement-form');
    }
}
