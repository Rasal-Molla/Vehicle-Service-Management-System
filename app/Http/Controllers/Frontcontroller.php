<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function Master(){
        return view('backend.master');
    }
    public function Dashboard(){
        return view('backend.pages.dashboard');
    }
}
