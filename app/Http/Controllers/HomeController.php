<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entries;
use DB;

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

        $user_id=auth()->user()->id;
        $user=User::find('user_id');
         $entries = Entries::where('user_id',$user)->get();
        return view('home')->with('entry', 'compact(entry)',$entries);
    }
}
