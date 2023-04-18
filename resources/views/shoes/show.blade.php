@extends('layouts.app')

@section('title')
  Dettaglio Scarpa
@endsection

@section('content')
    <div class="row">
      {{-- torna alla lista --}}
      <div class="col-12">
        <a href="{{ route('shoes.index') }}" class="btn btn-outline-success ms-auto" type="submit">Torna alla lista</a>
      </div>

      {{-- dettaglio  --}}
      <div class="col-8">
          @foreach ($shoe->getAttributes() as $attr=>$value)
            <li><strong>{{ $attr }}: </strong>{{$value}}</li>
          @endforeach
      </div>

      {{-- immagine --}}
      <div class="col-4">
        <img src="{{$shoe->img}}" alt="{{$shoe->name}}">
      </div>
    </div>
@endsection