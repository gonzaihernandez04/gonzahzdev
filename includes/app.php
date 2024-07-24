<?php
require __DIR__ . '/../vendor/autoload.php';

use Model\ActiveRecord;

require 'funciones.php';
require 'database.php';


ActiveRecord::setDB($db);

