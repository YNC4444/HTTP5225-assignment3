<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('weapons.index', [
          'weapons' => Weapon::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWeaponRequest $request)
    {
      Weapon::create($request->validated());

      Session::flash('success', 'Weapon added successfully');
      return redirect()->route('weapons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
      return view('weapons.show', compact('weapon')); // compact creates an array from variables & their values
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weapon $weapon)
    {
      return view('weapons.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon)
    {
      $weapon->update($request->validated());
    }

    /**
     * Soft delete
     */
    public function trash($id)
    {
      Weapon::Destroy($id);
      Session::flash('success', 'Weapon trashed successfully');
      return redirect()->route('weapons.index');
    }

    // Permanent delete
    public function destroy($id)
    {
      $weapon = Weapon::withTrashed()->where('id', $id)->first();
      $weapon->forceDelete();
      Session::flash('success', 'Weapon deleted successfully');
      return redirect()->route('weapons.index');
    }

    public function restore($id)
    {
      $weapon = Weapon::withTrashed()->where('id', $id)->first();
      $weapon->restore();
      Session::flash('success', 'Weapon restored successfully');
      return redirect()->route('weapons.trashed');
    }
}
