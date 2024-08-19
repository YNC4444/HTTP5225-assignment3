@extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">
        Update Character Profile
      </h1>
    </div>
  </div>
  <div class="row">
    <form action="{{ route('characters.update', $character -> id) }}" method="PUT">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      {{ csrf_field() }}
      <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
        <label for="name" class="form-label">Character Name</label>
      </div>
      <div class="mb-3">
        <fieldset> <!-- choosing to use fieldset instead of .form-check-inline for accessibility and semantics -->
          <legend class="form-label">Rarity:</legend>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="rarity1" name="rarity" aria-describedby="rarity" value="4">
            <label for="rarity1" class="form-check-label">4</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="rarity2" name="rarity" aria-describedby="rarity" value="5">
            <label for="rarity2" class="form-check-label">5</label>
          </div>
        </fieldset>
      </div>
      <div class="mb-3">
        <fieldset> <!-- choosing to use fieldset instead of .form-check-inline for accessibility and semantics -->
          <legend class="form-label">Element:</legend>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element1" name="element" aria-describedby="element" value="Aero">
            <label for="element1" class="form-check-label">Aero</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element2" name="element" aria-describedby="element" value="Electro">
            <label for="element2" class="form-check-label">Electro</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element3" name="element" aria-describedby="element" value="Fusion">
            <label for="element3" class="form-check-label">Fusion</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element4" name="element" aria-describedby="element" value="Glacio">
            <label for="element4" class="form-check-label">Glacio</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element5" name="element" aria-describedby="element" value="Havoc">
            <label for="element5" class="form-check-label">Havoc</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="element6" name="element" aria-describedby="element" value="Spectro">
            <label for="element6" class="form-check-label">Spectro</label>
          </div>
        </fieldset>
        <!-- @error('element')
            <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror -->
      </div>
      <div class="mb-3">
        <fieldset> <!-- choosing to use fieldset instead of .form-check-inline for accessibility and semantics -->
          <legend class="form-label">Weapon Class:</legend>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="weapon1" name="weapon" aria-describedby="weapon" value="Broadblade">
            <label for="weapon1" class="form-check-label">Broadblade</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="weapon2" name="weapon" aria-describedby="weapon" value="Sword">
            <label for="weapon2" class="form-check-label">Sword</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="weapon3" name="weapon" aria-describedby="weapon" value="Pistols">
            <label for="weapon3" class="form-check-label">Pistols</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="weapon4" name="weapon" aria-describedby="weapon" value="Gauntlet">
            <label for="weapon4" class="form-check-label">Gauntlet</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="weapon5" name="weapon" aria-describedby="weapon" value="Rectifier">
            <label for="weapon5" class="form-check-label">Rectifier</label>
          </div>
        </fieldset>
        <div class="mb-3">
          <label for="description" class="form-label">Character Description</label>
          <textarea class="form-control" id="description" name="description" rows="5" cols="50"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection