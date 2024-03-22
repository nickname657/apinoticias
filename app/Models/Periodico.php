<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodico extends Model
{
    public $periodico = ['id', 'nombre', 'url'];

    public function buscarperiodicos()
    {
        return view('periodico', compact('periodico'));
    }

    //Relacion uno a muchos

    public function post(){
        return "hola";
        
    }
}
