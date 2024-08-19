@extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">
        View all Weapons
      </h1>
    </div>
  </div>
  <div class="row">
    @foreach($weapons as $weapon)
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $weapon -> name }}</h5>
          <a href="{{ route('weapons.edit', $weapon -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('weapons.trash', $weapon -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection