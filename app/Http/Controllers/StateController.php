<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::paginate(5);

        return view('states.index', compact(['states']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all(['id','name']);
        return view('states.create', compact(['countries']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>[
                'required',
                'min:5',
                'max:64'
            ],
            'code'=>[
                'required',
                'max:5'
            ],
            'country_id'=>[
                'required',
                'integer'
            ],
        ]);

        State::create($validated);

        return redirect(route('states.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $state = State::whereId($id)->with('country')->get();
        return view('states.show', compact(['state',]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Country::all(['id','name']);
        $state = State::whereId($id)->get();
        $state = $state[0];
        return view('states.edit', compact(['state','countries']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'=>[
                'required',
                'min:5',
                'max:64'
            ],
            'code'=>[
                'required',
                'max:5'
            ],
            'country_id'=>[
                'required',
                'integer'
            ],
        ]);

        $state = State::whereId($id)->update($validated);

        return redirect(route('states.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        State::whereId($id)->delete();
        return redirect(route('states.index', $id));

    }
}
