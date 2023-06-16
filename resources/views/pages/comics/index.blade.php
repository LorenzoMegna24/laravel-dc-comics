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
      <a href="{{route('comics.edit', $elem)}}" class="btn btn-warning">Modifica fumetto</a>

      <form action="{{route('comics.destroy', $elem)}}" method="POST">
        @csrf
        @method('DELETE')
        <button onclick="return cancellaElemento()" class="btn btn-danger">Elimina fumetto</button>
      </form>
    </div>
  </div>
  @endforeach
@endsection

@section('script')
    function cancellaElemento(){
      return confirm('Eliminare il fumetto?')
    }
@endsection
