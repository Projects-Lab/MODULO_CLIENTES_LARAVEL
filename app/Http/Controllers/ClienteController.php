<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller{
  
    public function index(){
        $historia = Cliente::paginate('1');
        return view('afiliados.home', compact('historia'));
    }


    public function create(){
        return view('afiliados.create');   
    }


    public function store(ClienteRequest $resquest, Cliente $cliente){

            $cliente->tipoDocumento = $resquest->tipoDocumento;
            $cliente->numeroDocumento = $resquest->numeroDocumento;
            $cliente->primerApellido = $resquest->primerApellido;
            $cliente->segundoApellido = $resquest->segundoApellido;
            $cliente->primerNombre = $resquest->primerNombre;
            $cliente->segundoNombre = $resquest->segundoNombre;
            $cliente->sexo = $resquest->sexo;
            $cliente->fechaNacimiento = $resquest->fechaNacimiento;
            $cliente->edad = $resquest->edad;
            $cliente->estadoCivil = $resquest->estadoCivil;
            $cliente->ciudad = $resquest->ciudad;
            $cliente->localidad = $resquest->localidad;
            $cliente->barrio = $resquest->barrio;
            $cliente->telefono = $resquest->telefono;
            $cliente->celular = $resquest->celular;
            $cliente->nombreAseguradora = $resquest->nombreAseguradora;
            $cliente->tipodeVinculacion = $resquest->tipoVinculacion;
            $cliente->ocupacion = $resquest->ocupacion;
            $cliente->nombreAcudiente = $resquest->nombreAcompañante;
            $cliente->telefonoAcudiente = $resquest->telefonoAcompañante;
            $cliente->parentescoAcudiente = $resquest->parentescoResponsable;
            $cliente->telefonoParentesco = $resquest->telefonoResponsable;
            $cliente->motivoConsulta = $resquest->motivoConsulta;
            $cliente->emfermedadActual = $resquest->enfermedadActual;
            $cliente->antecedentePersonal = $resquest->antecentePersonal;
            $cliente->save();

            
            return redirect()->route('historia.home');
        }   


    public function show($id){
        $datos = Cliente::findOrFail($id);

        return view('afiliados.listar', compact('datos'));
    }


    public function edit($id){
        $clientes = Cliente::findOrFail($id);
        return view('afiliados.editar', compact('clientes'));
        
    }

    public function update(Request $request, Cliente $clientes){
        
        $clientes->update($request->all());
        return redirect()->route('historia.home');  
    }

    public function destroy(Cliente $data){
        $data->delete();
        return redirect()->route('historia.home');
    }
}
