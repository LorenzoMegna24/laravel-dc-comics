@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Comics Create
@endsection

@section( 'content' )

  <h1>Crea Fumetto</h1>
  <div class="container">

    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
  
      <div class="form-group">
        <label class="form-lable" for="title">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
        @error('title')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="description">Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="thumb">Thumb</label>
        <input class="form-control" type="text" name="thumb">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="price">Price</label>
        <input class="form-control" type="text" name="price">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="series">Series</label>
        <input class="form-control" type="text" name="series">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="sale_date">Sale date</label>
        <input class="form-control" type="text" name="sale_date">
      </div>
  
      <div class="form-group">
        <label class="form-lable" for="type">Type</label>
        <input class="form-control" type="text" name="type">
      </div>
  
  
      <button type="submit" class="btn btn-primary">Crea Fumetto</button>
  
    </form>
  </div>




@endsection