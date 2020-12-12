<?php

namespace App\Http\Controllers\User;
use App\Category1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use DB;

class IndexController extends Controller
{
    public function index(){
    //return DB::table('categories')->get();
   $cat = Category1::all();
   return view('user.welcome',compact('cat'));
    }
    public function about(){
        $cat = Category1::all();
       return view('user.about',compact('cat'));
        }
        
        public function contact(){
            $cat = Category1::all();
           return view('user.contact',compact('cat'));
            }
        
}
