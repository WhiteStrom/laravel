<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class productosController extends Controller
{
    public function getPDF(){
        $data = [
            'name' => "Claudia",
            'date' => date('Y-m-d')
        ];
        
        $pdf = PDF::loadView('pdf_Example', $data);
        return $pdf->stream('prueba.pdf');
    }

    public function index(){
        return view ("productos"); 
    }

    public function mostrar(){
        return view ("mostrar");
    }

    public function crear(){
        return view ("crear");
    }

    public function app(){
        return view ("app");
    }

    public function home(){
        return view ("home");
    }

    public function about(){
        return view ("about");
    }

    public function dataFormulario(Request $request){
        echo "Se ha recibido el formulario";
        echo "<br>";
        echo $request->input('Nombre');
        echo "<br>";
        echo $request->input('Precio');
        echo "<br>";
        echo $request->input('Existencias');
        echo "<br>";
    }

}