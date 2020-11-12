<?php

class Autoload {

    public function __construct()
    {
        spl_autoload_register(function ($class) {
            include PATH_DAO . $class . '.php';
        });
    }
}

new Autoload();