@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('shoes.store') }}">
    @csrf
    <br>
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value=""> <br><br>

    <label for="brand">Brand</label>
    <input type="text" name="brand" id="brand"> <br><br>

    <label for="size">Taglia</label>
    <input type="number" name="size" id="size"> <br><br>

    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price"> <br><br>
    
    <label for="type">Tipo</label>
    <select name="type" id="type">
      <option value="elegant">Elegant</option>
      <option value="sportive">Sportive</option>
      <option value="casual">Casual</option>
    </select> <br><br>

    <label for="image">Immagine</label>
    <input type="text" id="image" name="image" value="https://picsum.photos/200/300"> <br>

    <button type="submit">Modifica</button>
  </form>
@endsection