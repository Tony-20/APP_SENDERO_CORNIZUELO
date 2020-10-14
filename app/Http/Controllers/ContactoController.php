<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showForm()
    {
        return view('contacto');
    }
 /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function store(Request $request)
   {
       return view('welcome');
   }
}
