<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    
    public function index(){
        return "index de producto";
    }

    public function detalle(){
        return "detalle de producto";
    }

    public function detalleParam($param){
        return " producto: $param";
    }
}
