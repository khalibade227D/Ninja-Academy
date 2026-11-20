<?php

namespace App\Http\Controllers;

use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index()
    {
        $ninjas = Ninja::orderBy('created_at')->get();

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function create()
    {
        return view('ninjas.create');
    }
     public function show($id)
    {
        $ninjas = Ninja::findOrFail($id);
        return view('ninjas.show', ['ninjas'=> $ninjas]);
    }
     public function store()
    {
        return view('ninjas.create');
    }
     public function destroy()
    {
        return view('ninjas.create');
    }


}
