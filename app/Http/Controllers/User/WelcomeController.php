<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category1;
class WelcomeController extends Controller
{
    public function index3(){
        $cat = Category1::all();
        return view('user.welcome',compact('cat'));
    }
}
