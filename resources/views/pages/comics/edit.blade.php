@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Comics Edit
@endsection

@section( 'content' )

  <h1>Modifica Fumetto</h1>
  <div class="container">

    <form action="{{ route('comics.update', $comic) }}" method="POST">
      @csrf
      @method('PUT')
  
      <div class="form-group">
        <label class="form-lable" for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') ?? $comic->title }}">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Thumb</label>
        <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Price</label>
        <input class="form-control" type="text" name="price" value="{{ old('price') ?? $comic->price }}">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Series</label>
        <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series }}">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Sale date</label>
        <input class="form-control" type="text" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="">Type</label>
        <input class="form-control" type="text" name="type" value="{{ old('type') ?? $comic->type }}">
      </div>
  
  
      <button type="submit" class="btn btn-primary">Modifica Fumetto</button>
  
    </form>
  </div>




@endsection