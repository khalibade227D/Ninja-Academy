<?php

namespace App\Http\Controllers;

use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index()
    {
        $ninjas = Ninja::orderBy('created_at')->paginate(10);

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function create()
    {
        return view('ninjas.create');
    }
     public function show($id)
    {
        $ninja = Ninja::findOrFail($id);
        return view('ninjas.show', ['ninja'=> $ninja]);
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
