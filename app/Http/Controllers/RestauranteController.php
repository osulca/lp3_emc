<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MesaController;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function mostrar(){
        $mesaController = new MesaController();

        $restaurantes = Restaurante::get();
        $mesas = $mesaController->mostrar();
        return view("restauranteMostrar")
                ->with("restaurante", $restaurantes)
                ->with("mesas", $mesas);
    }
}
