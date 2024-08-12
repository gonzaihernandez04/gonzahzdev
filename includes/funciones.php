

<?php
function debuguear($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}

function isAuth(){
    return !empty($_SESSION) && $_SESSION['logged'];
}

function partirParrafo($texto) : array{
                        //Hace un SPLIT cuando detecta dos espacios. Divide en parrafos

    $parrafos = preg_split('/\n{1,}/', $texto);
    $arreglo = [];
    // Evito que se guarden caracteres vacios
    foreach ($parrafos as $parrafo) {
        if(validarVacioOEspacioVacio($parrafo)){
            continue;
        }
        $arreglo[] = $parrafo;
    }

    return $arreglo;

}

function validarVacioOEspacioVacio($string){
    $pattern = '/^\s*$/';
    return preg_match($pattern,$string) == 1;
}

function sanitizar($variable) :string{
    return htmlspecialchars($variable,ENT_QUOTES, 'UTF-8');
}



// // Encuentra una universidad
// function findUniversity($query) {
    
//     // if(!str_contains(strtolower($query),"universidad")){
//     //     $newQuery = "Universidad " . $query;
//     // }else{
//         $newQuery = $query;
//     //}
  

//     $url = "https://nominatim.openstreetmap.org/search?q=" . urlencode($newQuery) . "&format=jsonv2";
//     // Iniciar cURL
//     $ch = curl_init();

//     // Establecer opciones de cURL
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Tiempo de espera de 10 segundos



//     curl_setopt($ch, CURLOPT_USERAGENT, "gonzahzportfolio (gonzahernandezdev@gmail.com - localhost)");

//     // Ejecutar la solicitud y obtener la respuesta
//     $response = curl_exec($ch);

//     // Verificar si hubo errores
//     if (!$response) {
//         $error = curl_error($ch);
//         curl_close($ch);
//         return ["error" => "No se puede conectar a la API: " . $error];
//     }

//     // Cerrar la sesión cURL
//     curl_close($ch);
//     // Decodificar la respuesta JSON
//     $data = json_decode($response, true);
//     return json_encode($data);
  
// }