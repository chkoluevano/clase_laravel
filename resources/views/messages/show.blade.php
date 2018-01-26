@extends('layouts.plantilla_album')
@section('titulo')

Detalle {{$mensaje->id}}
@endsection
@section('contenido')
<img src="{{$mensaje->fotografia}}">
@endsection