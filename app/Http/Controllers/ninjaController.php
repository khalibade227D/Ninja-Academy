<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NinjaController extends Controller
{
    public function index(): View
    {
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(8);

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function create(): View
    {
        $dojos = Dojo::orderBy('name')->get();

        return view('ninjas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'skill' => ['required', 'string', 'max:255'],
            'rank' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'dojo_id' => ['required', 'exists:dojos,id'],
        ]);

        if (empty($validated['rank'])) {
            $validated['rank'] = 'Genin';
        }

        $ninja = Ninja::create($validated);

        return redirect()->route('ninjas.show', $ninja->id);
    }

    public function show(string|int $id): View
    {
        $ninja = Ninja::with('dojo')->findOrFail($id);

        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function delete(string|int $id): RedirectResponse
    {
        $ninja = Ninja::findOrFail($id);

        $ninja->delete();

        return redirect()->route('ninjas.index');
    }
}
