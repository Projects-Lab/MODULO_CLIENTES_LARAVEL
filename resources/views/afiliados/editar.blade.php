@extends('layouts.plantilla')
@section('titulo', 'Afiliados | Editar')

@section('contenido')
<hr>
<div>
	<div class="card">
		<div class="card-header pt-2 pb-2 bg-primary">
			<div class="card-title">
				<h3 class="text-center text-white">Editar información de: <span>{{$clientes->primerNombre}}</span></h3>
			</div>
		</div>
		<div class="card-body">
			<form class="row" action="{{route('historia.update', $clientes)}}" method="post">
				@csrf
				@method('put')
				<div class="col-md-4">
					<label class="form-label mt-3">Numero de documento </label>
					<input type="text" class="form-control form-control-sm" name="numeroDocumento" value="{{ $clientes->numeroDocumento}}">
				</div>
				<div class="col-md-4">
					<label  class="form-label mt-3">Tipo de documento</label>
					<select class="form-control form-control-sm" name="tipoDocumento">
						<option selected value="">Seleccione</option>
						<option value="Cedula de Ciudadania" @if($clientes->tipoDocumento == 'Cedula de Ciudadania') selected="selected" @endif>Cedula de Ciudadania</option>
						<option value="Tajeta de Identidad" @if($clientes->tipoDocumento == 'Tajeta de Identidad') selected="selected" @endif>Tarjeta de Identidad</option>
						<option value="Cedula Extranjera" @if($clientes->tipoDocumento == 'Cedula Extranjera') selected="selected" @endif>Cedula Extranjera</option>
						<option value="Pasaporte" @if($clientes->tipoDocumento == 'Pasaporte') selected="selected" @endif>Pasaporte</option>
					</select>
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Primer Apellido</label>
					<input type="text" class="form-control form-control-sm" name="primerApellido" value="{{ $clientes->primerApellido}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Segundo Apellido</label>
					<input type="text" class="form-control form-control-sm" name="segundoApellido" value="{{ $clientes->segundoApellido}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Primer Nombre</label>
					<input type="text" class="form-control form-control-sm" name="primerNombre" value="{{ $clientes->primerNombre}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Segundo Nombre</label>
					<input type="text" class="form-control form-control-sm" name="segundoNombre" value="{{ $clientes->segundoNombre}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Sexo</label>
					<select class="form-control form-control-sm" name="sexo" >
						<option selected disabled value="">Seleccione</option>
						<option value="Masculino" @if($clientes->sexo == 'Masculino') selected="selected" @endif>Masculino</option>
						<option value="Femenino" @if($clientes->sexo == 'Femenino') selected="selected" @endif>Femenino</option>
					</select>
				</div>
				<div class="col-md-2">
					<label class="form-label mt-3">Fecha de Nacimiento</label>
					<input type="date" class="form-control form-control-sm" name="fechaNacimiento" value="{{ $clientes->fechaNacimiento}}">
				</div>
				<div class="col-md-2">
					<label class="form-label mt-3">Edad</label>
					<input type="text" class="form-control form-control-sm" name="edad" value="{{ $clientes->edad}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Estado Civil</label>
					<select class="form-control form-control-sm" name="estadoCivil" >
						<option selected disabled value="">Seleccione</option>
						<option value="Soltero" @if($clientes->estadoCivil == 'Soltero') selected="selected" @endif>Soltero</option>
						<option value="Casado" @if($clientes->estadoCivil == 'Casado') selected="selected" @endif>Casado</option>
						<option value="Union libre" @if($clientes->estadoCivil == 'Union libre') selected="selected" @endif>Union Libre</option>
					</select>
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Ciudad</label>
					<input type="text" class="form-control form-control-sm" name="ciudad" value="{{ $clientes->ciudad}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Localidad</label>
					<input type="text" class="form-control form-control-sm" name="localidad" value="{{ $clientes->localidad}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Barrio</label>
					<input type="text" class="form-control form-control-sm" name="barrio" value="{{ $clientes->barrio}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Telefono</label>
					<input type="text" class="form-control form-control-sm" name="telefono" value="{{ $clientes->telefono}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Nombre de la aseguradora</label>
					<input type="text" class="form-control form-control-sm" name="nombreAseguradora" value="{{ $clientes->nombreAseguradora}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Tipo de vinculacion</label>
					<input type="text" class="form-control form-control-sm" name="tipodeVinculacion" value="{{ $clientes->tipodeVinculacion}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Ocupacion del paciente</label>
					<input type="text" class="form-control form-control-sm" name="ocupacion" value="{{ $clientes->ocupacion}}">
				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Nombre del acompanante</label>
					<input type="text" class="form-control form-control-sm" name="nombreAcudiente" value="{{ $clientes->nombreAcudiente}}">
				</div>
				<div class="col-md-2">
					<label class="form-label mt-3">Tel del acompañante</label>
					<input type="text" class="form-control form-control-sm" name="telefonoAcudiente" value="{{ $clientes->telefonoAcudiente}}">
				</div>
				<div class="col-md-2">
					<label class="form-label mt-3">Cel del acompañante</label>
					<input type="text" class="form-control form-control-sm" name="celular" value="{{ $clientes->celular}}">

				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Parentesco del responsable</label>
					<input type="text" class="form-control form-control-sm" name="parentescoAcudiente" value="{{ $clientes->parentescoAcudiente}}">

				</div>
				<div class="col-md-4">
					<label class="form-label mt-3">Telefono del responsable</label>
					<input type="text" class="form-control form-control-sm" name="telefonoParentesco" value="{{ $clientes->telefonoParentesco}}">

				</div>
				<div class="col-md-6 mt-4">
					<textarea name="motivoConsulta" class="form-control form-control-sm" placeholder="Motivo de la consulta">{{ $clientes->motivoConsulta}}</textarea>

				</div>

				<div class="col-md-6 mt-4">
					<textarea name="emfermedadActual" class="form-control form-control-sm" placeholder="Enfermedad actual">{{ $clientes->emfermedadActual}}</textarea>

				</div>
				<div class="col-md-6 mt-4">
					<textarea name="antecedentePersonal" class="form-control form-control-sm" placeholder="Antecedentes personales">{{ $clientes->antecedentePersonal}}</textarea>

				</div>
				<hr>
				<div class="col-12 mt-4 mb-4">
					<button class="btn btn-success btn-sm float-right" type="submit">Actualizar</button>
					<a class="btn btn-primary btn-sm float-right mr-2" href="{{ route('historia.home')}}">Regresar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
