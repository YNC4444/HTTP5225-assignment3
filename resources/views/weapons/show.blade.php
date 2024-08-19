@extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">
        Weapon Profile
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $weapon -> name }}</h5>
          <p class="card-text"> {{ $weapon -> rarity}} </p>
          <p class="card-text"> {{ $weapon -> class}} </p>
          <p class="card-text"> {{ $weapon -> base_atk}} </p>
          <p class="card-text"> {{ $weapon -> 2nd_stat}} </p>
          <p class="card-text"> {{ $weapon -> 2nd_stat_value_}} </p>
          <p class="card-text"> {{ $weapon -> description}} </p>
          <a href="{{ route('weapons.edit', $weapon -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('weapons.trash', $weapon -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
  </div>
@endsection