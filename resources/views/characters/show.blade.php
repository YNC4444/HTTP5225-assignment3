@extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">
        Character Profile
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $character -> name }}</h5>
          <p class="card-text"> {{ $character -> rarity}} </p>
          <p class="card-text"> {{ $character -> element}} </p>
          <p class="card-text"> {{ $character -> weapon_class}} </p>
          <p class="card-text"> {{ $character -> description}} </p>
          <a href="{{ route('characters.edit', $character -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('characters.trash', $character -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
  </div>
@endsection