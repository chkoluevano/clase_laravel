@extends('layouts.plantilla_album')
@section('titulo')
{{$titulo}}
@endsection
@section('contenido')
    <div class="row">
    @forelse($mensajes as $mensaje)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="{{$mensaje->fotografia}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{$mensaje->content}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/messages/{{$mensaje->id}}" class="btn btn-sm btn-outline-secondary" >View</a>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
@empty
"No existen registros"
@endforelse
    </div>
    @if (count($mensajes)>0)
    {{$mensajes->links('pagination::bootstrap-4')}}
@endif
</div>
@endsection

@section('descripcion')
<p class="lead text-muted">
    Mi album familiar, saludos :)
</p>
@endsection