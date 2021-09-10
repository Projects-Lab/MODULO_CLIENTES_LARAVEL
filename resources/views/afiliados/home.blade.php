@extends('layouts.plantilla')
@section('titulo', 'Afiliados | Listar')

@section('contenido')
<hr>
<table class="table table-bordered table-hover  table-responsibe table-dark">
  <thead>
    <tr>
      <th scope="col">Numero documento</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombres</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($historia as $data)
    <tr>
      <td>{{$data->numeroDocumento}}</td>
      <td>{{$data->primerApellido}} {{$data->segundoApellido}}</td>
      <td>{{$data->primerNombre}} {{$data->segundoNombre}}</td>
      <td>{{$data->edad}}</td>
      <td>{{$data->sexo}}</td>
      <td>{{$data->telefono}}</td>
      <td>{{$data->ciudad}}</td>
      <td>{{$data->created_at->toDateString()}}</td>
      <td>{{$data->created_at->toTimeString()}}</td>
      <td>
        <a class="btn btn-warning btn-sm" href="{{route('historia.editar', $data->id)}}">Editar</a>
      </td>
      <td>
        <form action="{{route('historia.delete', $data)}}" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $historia->links('pagination::bootstrap-4') }}
@endsection
