

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

    $parrafos = preg_split('/\n{2,}/', $texto);
    $arreglo = [];
    // Evito que se guarden caracteres vacios
    foreach ($parrafos as $parrafo) {
        if($parrafo == ""){
            continue;
        }
        $arreglo[] = $parrafo;
    }

    return $arreglo;

}

function sanitizar($variable) :string{
    return htmlspecialchars($variable);
}