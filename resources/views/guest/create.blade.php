@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
      <form action="{{ route('comics.store') }}" method="POST" >
  
        @csrf
  
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="Tipo di comic">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image (url)</label>
          <input type="text" class="form-control" name="thumb" id="image" placeholder="Url image">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" name="series" id="seires" placeholder="Serie">
        </div>
  
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale_date</label>
          <input type="number" class="form-control" name="sale_date" id="sale_date" placeholder="Giorno di vendita">
        </div>
  
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input class="form-control" name="price" id="price" rows="3" placeholder="Prezzo del comic"></input>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi il comic"></textarea>
        </div>
  
        <div class="">
          <input type="submit" class="btn btn-primary" value="create">
        </div>
  
      </form>
    </div>
  </section>
  
@endsection