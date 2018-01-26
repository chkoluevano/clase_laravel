@extends('layouts.plantilla')
@section('titulo')
{{$titulo}}
@endsection

@section('contenido')

<div class="row">
  <div class="col">
    <ul class="list-group">
    @forelse ($links as $key => $link)
        <li class="list-group-item"><a href='{{$link}}' target="blank">{{$key}}</a></li>
      @empty
        "no hay links"
      @endforelse
    </ul>
  </div>
<!-- Usuarios -->
<div class="col">
  <ul class="starter-template">
  @forelse ($usuarios as $usuario)
    <li class="list-group-item">{{$usuario}}</li>
  @empty
    "No hay usuarios"
  @endforelse
  </ul>
</div>
</div>

@endsection