<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoluntariadoIndividual;
use DB;

class VoluntariadoIndividualController extends Controller
{
    public function create()
    { 
        return view('formvolind.create');
    }

    public function store(Request $request)
    {
        $volind = new VoluntariadoIndividual();
        $volind->Nombre = $request->get('Nombre');
        $volind->DNI = $request->get('DNI');
        $volind->Ape1 = $request->get('Ape1');
        $volind->Ape2 = $request->get('Ape2');
        $volind->Cantidad = $request->get('Cantidad');
        $volind->TipoVoluntariado = $request->get('TipoVoluntariado');
        $volind->Email = $request->get('Email');
        $volind->Fecha = $request->get('Fecha');
        $volind->Pais = $request->get('Pais');
        $volind->Procedencia = $request->get('Procedencia');
        $volind->NombreProcedencia = $request->get('NombreProcedencia');
        $volind->Telefono = $request->get('Telefono');
        $volind->Detalle = $request->get('Detalle');
        $volind->save();
        return redirect('/formvolind')->with('success', 'voluntariado has been successfully added');
    }

    public function index()
    {
        $volind = VoluntariadoIndividual::all();
        return view('formvolind.index',compact('volind'));
    }

    public function edit($id)
    {
        $volind = VoluntariadoIndividual::find($id);
        return view('formvolind.edit',compact('volind','id'));
    }

    public function update(Request $request, $id)
    {
        $volind= VoluntariadoIndividual::find($id);
        $volind->Nombre = $request->get('Nombre');
        $volind->DNI = $request->get('DNI');
        $volind->Ape1 = $request->get('Ape1');
        $volind->Ape2 = $request->get('Ape2');
        $volind->Cantidad = $request->get('Cantidad');
        $volind->TipoVoluntariado = $request->get('TipoVoluntariado');
        $volind->Email = $request->get('Email');
        $volind->Fecha = $request->get('Fecha');
        $volind->Pais = $request->get('Pais');
        $volind->Procedencia = $request->get('Procedencia');
        $volind->NombreProcedencia = $request->get('NombreProcedencia');
        $volind->Telefono = $request->get('Telefono');
        $volind->Detalle = $request->get('Detalle');   
        $volind->save();
        return redirect('/formvolind/')->with('success', 'voluntariado has been successfully update');
    }

    public function destroy($id)
    {
        DB::table('individual_volunteers')->where('id', $id)->delete();
        return redirect('/formvolind/')->with('success','Registro eliminado exitosamente');
    }
}