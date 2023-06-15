@extends('layout.app')
@section('titlePage')
    Laravel App | Comics index
@endsection

@section('content')
<h2>Qui ci saranno tutti i fumetti</h2>
  @foreach ($comics as $elem)
  <div class="card" style="width: 18rem;">
    <img src="{{$elem->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="{{ route('comics.show', ['comic' => $elem->id] ) }}">
        <h5 class="card-title">{{$elem->title}}</h5>
      </a>
      <p class="card-text">{{$elem->description}}</p>
    </div>
  </div>
  @endforeach
@endsection
