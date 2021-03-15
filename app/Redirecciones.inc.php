<?php


class Redirecciones {

    public static function redirigir($url) {

        header("Location: " . $url,true,301);
        
        exit();

    }

}