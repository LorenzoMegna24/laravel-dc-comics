@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Singolo Comic
@endsection

@section( 'content' )

  <h1>Singolo Comic</h1>

  <div class="container">
    <h3>{{$singoloComic->title}}</h3>
  </div>

@endsection