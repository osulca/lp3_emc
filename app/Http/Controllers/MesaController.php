<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function mostrar(){
        $mesas = Mesa::get();
        return $mesas;
    }
}
