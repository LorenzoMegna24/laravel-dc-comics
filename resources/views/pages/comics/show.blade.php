@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Singolo Comic
@endsection

@section( 'content' )

  <h1>Singolo Comic</h1>

  <div class="container">
  <div class="card" style="width: 18rem;">
    <img src="{{$singoloComic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="{{ route('comics.show', ['comic' => $singoloComic->id] ) }}">
        <h5 class="card-title">{{$singoloComic->title}}</h5>
      </a>
      <p class="card-text">{{$singoloComic->description}}</p>
      <a href="{{route('comics.edit', $singoloComic)}}" class="btn btn-warning">Modifica fumetto</a>
    </div>
  </div>
  </div>

@endsection