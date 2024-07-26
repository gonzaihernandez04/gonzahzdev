<?php
namespace Controllers;

class ApiUniversidadesController{
    public static function getUniversity(){
        if(isset($_GET['query'])){
            $universidad = sanitizar($_GET['query']);
            $result = findUniversity($universidad);
            echo $result;         
            
        }
    }
}