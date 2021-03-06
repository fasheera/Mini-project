<?php

namespace App\Http\Controllers;

use App\user;
use Auth;
use View;
use \DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $id = Auth::user()->id;
        if($id == "1" ){
            return view('admin');
        }
        else{
            return view('home');
        }
    }
}
