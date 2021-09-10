{{-- @extends('layouts.plantilla')
@section('titulo', 'Afiliados | Listar')

@section('contenido')
<hr>
<table class="table table-bordered table-hover  table-responsibe">
  <thead class="table-success">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Numero documento</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombres</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->numeroDocumento}}</td>
      <td>{{$data->primerApellido}} {{$data->segundoApellido}}</td>
      <td>{{$data->primerNombre}} {{$data->segundoNombre}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
 --}}

 {{$datos}}