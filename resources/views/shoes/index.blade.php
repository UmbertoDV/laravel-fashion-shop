@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="d-flex ms-auto">
      <a href="{{ route('shoes.create') }}" class="btn btn-outline-success ms-auto" type="submit">Aggiungi Scarpa</a>
    </div>
  </div>

</div>
<div class="row">
  <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Brand</th>
            <th scope="col">Tipo</th>
            <th scope="col">Taglia</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $shoe)
        <tr>
            <th scope="row">{{ $shoe->id }}</th>
            <td>{{ $shoe->name }}</td>
            <td>{{ $shoe->brand }}</td>
            <td>{{ $shoe->type }}</td>
            <td>{{ $shoe->size }}</td>
            <td>{{ $shoe->price }} €</td>
            <td class="d-flex">

              <a class="text-decoration-none mx-2" href="{{ route('shoes.show', $shoe )}}"> <i class="bi bi-eye"> </i> </a> 
              <a class="text-decoration-none" href={{ route('shoes.edit', $shoe )}}> <i class="bi bi-pencil"> </i></i> </a>

              <form action="{{ route('shoes.destroy', $shoe)}}" method="POST">
                @csrf
                @method('delete')

                <button class="text-decoration-none text-danger mx-2" type="submit"> <i class="bi bi-trash3"> </i> </button>
      
              </form>
            
            </td>
          

        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection