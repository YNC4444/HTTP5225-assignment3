@extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">
        View all Characters
      </h1>
    </div>
  </div>
  <div class="row">
    @foreach($characters as $character)
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $character -> name }}</h5>
          <a href="{{ route('characters.edit', $character -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('characters.trash', $character -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection