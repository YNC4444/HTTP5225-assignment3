@extends('layouts/admin')
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-2">
      Update Weapon Profile
    </h1>
  </div>
</div>
<div class="row">
  <form action="{{ route('weapons.update', $weapon -> id) }}" method="PUT">
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
      <label for="name" class="form-label">Weapon Name</label>
    </div>
    <div class="mb-3">
      <fieldset> <!-- choosing to use fieldset instead of .form-check-inline for accessibility and semantics -->
        <legend class="form-label">Rarity:</legend>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="rarity1" name="rarity" aria-describedby="rarity" value="4">
          <label for="rarity1" class="form-check-label">1</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="rarity1" name="rarity" aria-describedby="rarity" value="4">
          <label for="rarity1" class="form-check-label">2</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="rarity1" name="rarity" aria-describedby="rarity" value="4">
          <label for="rarity1" class="form-check-label">3</label>
        </div>
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
        <legend class="form-label">Class:</legend>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="class1" name="class" aria-describedby="class" value="Broadblade">
          <label for="class1" class="form-check-label">Broadblade</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="class2" name="class" aria-describedby="class" value="Gauntlet">
          <label for="class2" class="form-check-label">Gauntlet</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="class3" name="class" aria-describedby="class" value="Pistols">
          <label for="class3" class="form-check-label">Pistols</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="class4" name="class" aria-describedby="class" value="Rectifier">
          <label for="class4" class="form-check-label">Rectifier</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="class5" name="class" aria-describedby="class" value="Sword">
          <label for="class5" class="form-check-label">Sword</label>
        </div>
      </fieldset>
      <!-- @error('element')
            <span class="text-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror -->
    </div>
    <div class="mb-3">
      <input type="number" class="form-control" id="base_atk" name="base_atk" aria-describedby="base_atk">
      <label for="base_atk" class="form-label">Base ATK</label>
    </div>
    <div class="mb-3">
      <fieldset> <!-- choosing to use fieldset instead of .form-check-inline for accessibility and semantics -->
        <legend class="form-label">2nd Stat:</legend>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat1" name="2nd_stat" aria-describedby="2nd_stat" value="ATK">
          <label for="2nd_stat1" class="form-check-label">ATK</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat2" name="2nd_stat" aria-describedby="2nd_stat" value="DEF">
          <label for="2nd_stat2" class="form-check-label">DEF</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat3" name="2nd_stat" aria-describedby="2nd_stat" value="Energy Regen">
          <label for="2nd_stat3" class="form-check-label">Energy Regen</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat4" name="2nd_stat" aria-describedby="2nd_stat" value="Crit Rate">
          <label for="2nd_stat4" class="form-check-label">Crit Rate</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat5" name="2nd_stat" aria-describedby="2nd_stat" value="Crit DMG">
          <label for="2nd_stat5" class="form-check-label">Crit DMG</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id="2nd_stat5" name="2nd_stat" aria-describedby="2nd_stat" value="HP">
          <label for="2nd_stat5" class="form-check-label">HP</label>
        </div>
      </fieldset>
      <div class="mb-3">
        <input type="number" class="form-control" id="2nd_stat_value_%" name="2nd_stat_value_%" aria-describedby="2nd_stat_value_%">
        <label for="2nd_stat_value_%" class="form-label">2nd stat value (%):</label>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Weapon Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" cols="50"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection