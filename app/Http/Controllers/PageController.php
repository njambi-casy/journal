<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('Pages.index');
    }

    public function album(){
    	return view('Pages.Album');

    }

        public function Help(){
        	return view('Pages.Help');
    	
    }

        public function reminders(){
        	return view('Pages.Reminders');
    	
    }

       
}
