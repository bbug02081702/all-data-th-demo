<?php

namespace App\Http\Controllers;


use App\Models\Motel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
       $data = Motel::paginate(5);
       return view('home.index', compact('data'));
     }
}
