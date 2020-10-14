<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoluntariadoGrupal;

class VoluntariadoGrupalController extends Controller
{
    public function create()
    { 
        return view('formvolgrup.create');
    }

    public function store(Request $request)
    {
        $volgrup = new VoluntariadoGrupal();
        $volgrup->Nombre = $request->get('Nombre');
        $volgrup->DNI = $request->get('DNI');
        $volgrup->Ape1 = $request->get('Ape1');
        $volgrup->Ape2 = $request->get('Ape2');
        $volgrup->Cantidad = $request->get('Cantidad');
        $volgrup->TipoVoluntariado = $request->get('TipoVoluntariado');
        $volgrup->Email = $request->get('Email');
        $volgrup->Fecha = $request->get('Fecha');
        $volgrup->Pais = $request->get('Pais');
        $volgrup->Procedencia = $request->get('Procedencia');
        $volgrup->NombreProcedencia = $request->get('NombreProcedencia');
        $volgrup->Telefono = $request->get('Telefono');
        $volgrup->Detalle = $request->get('Detalle');
        $volgrup->save();
        return redirect('/formvolgrup/')->with('success', 'voluntariado has been successfully added');
    }

    public function index()
    {
        $volgrup = VoluntariadoGrupal::all();
        return view('formvolgrup.index',compact('volgrup'));
    }

    public function edit($id)
    {
        $volgrup = VoluntariadoGrupal::find($id);
        return view('formvolgrup.edit',compact('volgrup','id'));
    }

    public function update(Request $request, $id)
    {
        $volgrup= VoluntariadoGrupal::find($id);
        $volgrup->Nombre = $request->get('Nombre');
        $volgrup->DNI = $request->get('DNI');
        $volgrup->Ape1 = $request->get('Ape1');
        $volgrup->Ape2 = $request->get('Ape2');
        $volgrup->Cantidad = $request->get('Cantidad');
        $volgrup->TipoVoluntariado = $request->get('TipoVoluntariado');
        $volgrup->Email = $request->get('Email');
        $volgrup->Fecha = $request->get('Fecha');
        $volgrup->Pais = $request->get('Pais');
        $volgrup->Procedencia = $request->get('Procedencia');
        $volgrup->NombreProcedencia = $request->get('NombreProcedencia');
        $volgrup->Telefono = $request->get('Telefono');
        $volgrup->Detalle = $request->get('Detalle');   
        $volgrup->save();
        return redirect('/formvolgrup/')->with('success', 'voluntariado has been successfully update');
    }

    public function destroy($id)
    {
        $volgrup = VoluntariadoGrupal::find($id);
        $volgrup->delete();
        return redirect('/formvolgrup/')->with('success','voluntariado has been  deleted');
    }
}