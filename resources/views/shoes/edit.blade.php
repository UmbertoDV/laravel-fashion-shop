@extends('layouts.app')

@section('content')

  <form method="POST" action="{{ route('shoes.update', $shoe) }}">
    @csrf
    @method('put')
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


    <button type="submit">Aggiungi</button>
  </form>
@endsection