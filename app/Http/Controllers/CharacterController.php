<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('characters.index',[
          'characters'=>Character::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        Character::create($request->validated());

        Session::flash('success', 'Character added successfully');
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character')); // compact creates an array from variables & their values
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $character->update($request->validated());
    }

    /**
     * Soft delete
     */
    public function trash($id)
    {
        Character::Destroy($id);
        Session::flash('success', 'Character trashed successfully');
        return redirect()->route('characters.index');
    }

    // Permanent delete
    public function destroy($id)
    {
        $character = Character::withTrashed()->where('id', $id)->first();
        $character->forceDelete();
        Session::flash('success', 'Character deleted successfully');
        return redirect()->route('characters.index');
    }

    public function restore($id)
    {
      $character = Character::withTrashed()->where('id', $id)->first();
      $character->restore();
      Session::flash('success', 'Character restored successfully');
      return redirect()->route('characters.trashed');
    }
}
