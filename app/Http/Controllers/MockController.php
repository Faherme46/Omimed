<?php

namespace App\Http\Controllers;
class MockController extends Controller{

    public function getData($field){
        // URL de la API que deseas consumir
        $apiUrl = 'https://6287d9a77864d2883e8dca86.mockapi.io/Users';

        // Realizar la solicitud GET a la API
        $response = file_get_contents($apiUrl);

        // Verificar si se recibió una respuesta
        if ($response === false) {
            die('Error al obtener los datos de la API.');
        }

        // Decodificar la respuesta JSON (o XML u otro formato) en un arreglo asociativo
        $data = json_decode($response, true);
        $dataComplete=$data[0];
        $arrayDeseado=$dataComplete[$field];


        return $arrayDeseado;
}

}
