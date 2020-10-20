<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaminataGrupal;
use DB;

class CaminataGrupalController extends Controller
{
    public function create()
    {  
        return view('formresgrup.create');
    }

    public function store(Request $request)
    {
        $resgrup = new CaminataGrupal();
        $resgrup->Nombre = $request->get('Nombre');
        $resgrup->DNI = $request->get('DNI');
        $resgrup->Ape1 = $request->get('Ape1');
        $resgrup->Ape2 = $request->get('Ape2');
        $resgrup->Cantidad = $request->get('Cantidad');
        $resgrup->TipoVoluntariado = $request->get('TipoVoluntariado');
        $resgrup->Email = $request->get('Email');
        $resgrup->Fecha = $request->get('Fecha');
        $resgrup->Pais = $request->get('Pais');
        $resgrup->Procedencia = $request->get('Procedencia');
        $resgrup->NombreProcedencia = $request->get('NombreProcedencia');
        $resgrup->Telefono = $request->get('Telefono');
        $resgrup->Detalle = $request->get('Detalle');
        $resgrup->save();
        return redirect('/formresgrup/')->with('success', 'Registro agregado exitosamente');
    }

    public function index()
    {
        $resgrup = CaminataGrupal::all();
        return view('formresgrup.index',compact('resgrup'));
    }

    public function edit($id)
    {
        $resgrup = CaminataGrupal::find($id);
        return view('formresgrup.edit',compact('resgrup','id'));
    }

    public function update(Request $request, $id)
    {
        $resgrup= CaminataGrupal::find($id);
        $resgrup->Nombre = $request->get('Nombre');
        $resgrup->DNI = $request->get('DNI');
        $resgrup->Ape1 = $request->get('Ape1');
        $resgrup->Ape2 = $request->get('Ape2');
        $resgrup->Cantidad = $request->get('Cantidad');
        $resgrup->TipoVoluntariado = $request->get('TipoVoluntariado');
        $resgrup->Email = $request->get('Email');
        $resgrup->Fecha = $request->get('Fecha');
        $resgrup->Pais = $request->get('Pais');
        $resgrup->Procedencia = $request->get('Procedencia');
        $resgrup->NombreProcedencia = $request->get('NombreProcedencia');
        $resgrup->Telefono = $request->get('Telefono');
        $resgrup->Detalle = $request->get('Detalle');   
        $resgrup->save();
        return redirect('/formresgrup/')->with('success', 'Registro actualizado exitosamente');
    }

    public function destroy($id)
    {
        DB::table('group_walks')->where('id', $id)->delete();
        return redirect('/formresgrup/')->with('success','Registro eliminado exitosamente');
    }
}