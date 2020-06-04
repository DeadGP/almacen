<?php namespace App\Controllers;

class Home extends BaseController
{
	//Función que se ejecuta por default cuando se corre el controlador
	public function index()
	{
		return view('dashboard');
	}

	//--------------------------------------------------------------------
	public function loadCatUnidades(){
		return view("catunidades");
	}

	//---------------------------------------------------------------------
	//Fuoncion para recibir datos de clave y descripción del formulario
	public function recibirUnidades(){
	  $clave = $_POST['code'];
      $name = $_POST['desc'];
      
      // Introducimos al arreglo los datos
      $datos['clave']=$clave;
      $datos['nombre']=$name;
       
      // Llamamos a la vista prueba.php y le enviamos los datos 
      echo view('prueba', $datos); 
	}

}
