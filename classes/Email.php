<?php
namespace Classes;

class Email{
    private $email;
    private $nombre;
    private $token;

    public function __construct($email,$nombre,$token){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
}

