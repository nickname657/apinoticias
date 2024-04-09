<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodico; 


class addPaperController extends Controller
{
    

public function store(Request $request)
{
    $paper = new Periodico();
    $paper->nombre = $request->input('nombre');
    $paper->url = $request->input('url');

    // Guardar el objeto en la base de datos
    $paper->save();

    // Opcionalmente, puedes devolver una respuesta
    return response()->json(['message' => 'Paper creado correctamente'], 201);
}



}
