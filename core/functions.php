<?php

use core\Response;

function abort($code = Response::NOT_FOUND){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function authorize($statement, $status = Response::FOBIDDEN){
    if (! $statement){
        abort($status);
    }
}

function base_path($value){
    return BASE_PATH . $value;

}

function view($value, $content = []){
    extract($content);
    require base_path('views/'. $value);
}