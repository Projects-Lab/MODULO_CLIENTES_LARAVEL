@extends('layouts.plantilla')
@section('titulo', 'Afiliados | Crear')

@section('contenido')
<hr>

	<form class="row" action="{{ route('historia.store')}}" method="post">
		@csrf
		<div class="col-md-4">
			<label class="form-label mt-3">Numero de documento</label>
			<input type="text" class="form-control" name="numeroDocumento" value="{{ old('numeroDocumento')}}">
			{!! $errors->first('numeroDocumento', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}

		</div>
		<div class="col-md-4">
			<label  class="form-label mt-3">Tipo de documento</label>
			<select class="form-control" name="tipoDocumento">
				<option selected value="">Seleccione</option>
				<option value="Cedula de Ciudadania" @if(old('tipoDocumento') == 'Cedula de Ciudadania') selected="selected" @endif>Cedula de Ciudadania</option>
				<option value="Tajeta de Identidad" @if(old('tipoDocumento') == 'Tajeta de Identidad') selected="selected" @endif>Tarjeta de Identidad</option>
				<option value="Cedula Extranjera" @if(old('tipoDocumento') == 'Cedula Extranjera') selected="selected" @endif>Cedula Extranjera</option>
				<option value="Pasaporte" @if(old('tipoDocumento') == 'Pasaporte') selected="selected" @endif>Pasaporte</option>
			</select>
			{!! $errors->first('tipoDocumento', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Primer Apellido</label>
			<input type="text" class="form-control" name="primerApellido" value="{{ old('primerApellido')}}">
			{!! $errors->first('primerApellido', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Segundo Apellido</label>
			<input type="text" class="form-control" name="segundoApellido" value="{{ old('segundoApellido')}}">
			{!! $errors->first('segundoApellido', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Primer Nombre</label>
			<input type="text" class="form-control" name="primerNombre" value="{{ old('primerNombre')}}">
			{!! $errors->first('primerNombre', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Segundo Nombre</label>
			<input type="text" class="form-control" name="segundoNombre" value="{{ old('segundoNombre')}}">
			{!! $errors->first('segundoNombre', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Sexo</label>
			<select class="form-control" name="sexo" >
				<option selected disabled value="">Seleccione</option>
				<option value="Masculino" @if(old('sexo') == 'Masculino') selected="selected" @endif>Masculino</option>
				<option value="Femenino" @if(old('sexo') == 'Femenino') selected="selected" @endif>Femenino</option>
			</select>
			{!! $errors->first('sexo', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-2">
			<label class="form-label mt-3">Fecha de Nacimiento</label>
			<input type="date" class="form-control" name="fechaNacimiento" value="{{ old('fechaNacimiento')}}">
			{!! $errors->first('fechaNacimiento', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-2">
			<label class="form-label mt-3">Edad</label>
			<input type="text" class="form-control" name="edad" value="{{ old('edad')}}">
			{!! $errors->first('edad', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Estado Civil</label>
			<select class="form-control" name="estadoCivil" >
				<option selected disabled value="">Seleccione</option>
				<option value="Soltero" @if(old('estadoCivil') == 'Soltero') selected="selected" @endif>Soltero</option>
				<option value="Casado" @if(old('estadoCivil') == 'Casado') selected="selected" @endif>Casado</option>
				<option value="Union libre" @if(old('estadoCivil') == 'Union libre') selected="selected" @endif>Union Libre</option>
			</select>
			{!! $errors->first('estadoCivil', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Ciudad</label>
			<input type="text" class="form-control" name="ciudad" value="{{ old('ciudad')}}">
			{!! $errors->first('ciudad', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Localidad</label>
			<input type="text" class="form-control" name="localidad" value="{{ old('localidad')}}">
			{!! $errors->first('localidad', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Barrio</label>
			<input type="text" class="form-control" name="barrio" value="{{ old('barrio')}}">
			{!! $errors->first('barrio', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Telefono</label>
			<input type="text" class="form-control" name="telefono" value="{{ old('telefono')}}">
			{!! $errors->first('telefono', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Nombre de la aseguradora</label>
			<input type="text" class="form-control" name="nombreAseguradora" value="{{ old('nombreAseguradora')}}">
			{!! $errors->first('nombreAseguradora', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Tipo de vinculacion</label>
			<input type="text" class="form-control" name="tipoVinculacion" value="{{ old('tipoVinculacion')}}">
			{!! $errors->first('tipoVinculacion', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Ocupacion del paciente</label>
			<input type="text" class="form-control" name="ocupacion" value="{{ old('ocupacion')}}">
			{!! $errors->first('ocupacion', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Nombre del acompanante</label>
			<input type="text" class="form-control" name="nombreAcompañante" value="{{ old('nombreAcompañante')}}">
			{!! $errors->first('nombreAcompañante', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-2">
			<label class="form-label mt-3">Tel del acompañante</label>
			<input type="text" class="form-control" name="telefonoAcompañante" value="{{ old('telefonoAcompañante')}}">
			{!! $errors->first('telefonoAcompañante', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-2">
			<label class="form-label mt-3">Cel del acompañante</label>
			<input type="text" class="form-control" name="celular" value="{{ old('celular')}}">
			{!! $errors->first('celular', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Parentesco del responsable</label>
			<input type="text" class="form-control" name="parentescoResponsable" value="{{ old('parentescoResponsable')}}">
			{!! $errors->first('parentescoResponsable', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-4">
			<label class="form-label mt-3">Telefono del responsable</label>
			<input type="text" class="form-control" name="telefonoResponsable" value="{{ old('telefonoResponsable')}}">
			{!! $errors->first('telefonoResponsable', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-6 mt-4">
			<textarea name="motivoConsulta" class="form-control" placeholder="Motivo de la consulta">{{ old('motivoConsulta')}}</textarea>
			{!! $errors->first('motivoConsulta', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>

		<div class="col-md-6 mt-4">
			<textarea name="enfermedadActual" class="form-control" placeholder="Enfermedad actual">{{ old('enfermedadActual')}}</textarea>
			{!! $errors->first('enfermedadActual', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-6 mt-4">
			<textarea name="antecentePersonal" class="form-control" placeholder="Antecedentes personales">{{ old('antecentePersonal')}}</textarea>
			{!! $errors->first('antecentePersonal', '<span class="badge rounded-pill bg-danger text-white">:message</span>')!!}
		</div>
		<div class="col-md-12">
			<hr style="border: 2px solid blue">
		</div>
		<div class="col-12 mt-4 mb-4">
			<button class="btn btn-success" type="submit">Registrar</button>
			<a class="btn btn-primary ml-2" href="{{ route('historia.home')}}">Regresar</a>
		</div>
	</form>

@endsection
