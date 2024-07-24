<?php

$db = mysqli_connect("localhost", "root", "", "portfolio");

 if(!$db){
     echo "No se pudo conectar a la base de datos";
     echo "errno de depuracion:" . mysqli_connect_errno();
   echo "error de depuracion " . mysqli_connect_error();
}


