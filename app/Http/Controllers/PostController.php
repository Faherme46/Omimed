<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public $mockController;
    public function __construct() {
        $this->mockController= new MockController();
    }
    //
    public function loguear(Request $request)
    {
        // Validación de datos (puedes personalizarla según tus necesidades)
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $usersArray=$this->mockController->getData("Users");

        for ($i=0; $i < count($usersArray); $i++) {
            # code...
            if ($request->__get('username')==$usersArray[$i]['username'] and $request->__get('password')==$usersArray[$i]['password']){
                $route=$usersArray[$i]['route'];
                return redirect()->route($route);
            }else{
                echo "Usuario o contraseña Incorrectos";
                return view("login");
            }


        }


        // Redirige a una página de éxito o muestra un mensaje de éxito

    }

}
