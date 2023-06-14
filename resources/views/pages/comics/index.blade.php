@extends('layout.app')

@section('content')
    <h2>Qui ci saranno tutti i fumetti</h2>
  @foreach ($comics as $elem)
  <div class="card" style="width: 18rem;">
    <img src="{{$elem->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$elem->title}}</h5>
      <p class="card-text">{{$elem->description}}</p>
    </div>
  </div>
  @endforeach

@endsection
