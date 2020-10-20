<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaminataIndividual;
use DB;

class CaminataIndividualController extends Controller
{
    public function create()
    { 
        return view('formresind.create');
    }

    public function store(Request $request) 
    {
        $resind = new CaminataIndividual();
        $resind->Nombre = $request->get('Nombre');
        $resind->DNI = $request->get('DNI');
        $resind->Ape1 = $request->get('Ape1');
        $resind->Ape2 = $request->get('Ape2');
        $resind->Cantidad = $request->get('Cantidad');
        $resind->TipoVoluntariado = $request->get('TipoVoluntariado');
        $resind->Email = $request->get('Email');
        $resind->Fecha = $request->get('Fecha');
        $resind->Pais = $request->get('Pais');
        $resind->Procedencia = $request->get('Procedencia');
        $resind->NombreProcedencia = $request->get('NombreProcedencia');
        $resind->Telefono = $request->get('Telefono');
        $resind->Detalle = $request->get('Detalle');
        $resind->save();
        return redirect('/formresind/')->with('success', 'voluntariado has been successfully added');
    }

    public function index()
    {
        $resind = CaminataIndividual::all();
        return view('formresind.index',compact('resind'));
    }

    public function edit($id)
    {
        $resind = CaminataIndividual::find($id);
        return view('formresind.edit',compact('resind','id'));
    }

    public function update(Request $request, $id)
    {
        $resind= CaminataIndividual::find($id);
        $resind->Nombre = $request->get('Nombre');
        $resind->DNI = $request->get('DNI');
        $resind->Ape1 = $request->get('Ape1');
        $resind->Ape2 = $request->get('Ape2');
        $resind->Cantidad = $request->get('Cantidad');
        $resind->TipoVoluntariado = $request->get('TipoVoluntariado');
        $resind->Email = $request->get('Email');
        $resind->Fecha = $request->get('Fecha');
        $resind->Pais = $request->get('Pais');
        $resind->Procedencia = $request->get('Procedencia');
        $resind->NombreProcedencia = $request->get('NombreProcedencia');
        $resind->Telefono = $request->get('Telefono');
        $resind->Detalle = $request->get('Detalle');   
        $resind->save();
        return redirect('/formresind/')->with('success', 'voluntariado has been successfully update');
    }

    public function destroy($id)
    {
        DB::table('individual_walks')->where('id', $id)->delete();
        return redirect('/formresind/')->with('success','Registro eliminado exitosamente');
    }
}