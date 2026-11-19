<?php

namespace App\Http\Controllers;

use app\Models\Ninja;
use Illuminate\Http\Request;

class ninjaController extends Controller
{
 
    public function index(){
        $ninjas  = Ninja::orderBy('created_at','desc')->get();

          return view('ninjas.index', ['ninjas' => $ninjas]);


    }
     public function create(){

    }
}
