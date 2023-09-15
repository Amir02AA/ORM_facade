<?php
include_once "vendor/autoload.php";
use classes\ORMFacade;


ORMFacade::deleteDoctor('Kourosh' , 100 , 'red' , ['email' => 'kourosh@mail']);
