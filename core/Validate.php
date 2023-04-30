<?php

namespace core;
class Validate {
   public static function string($value, $min = 1, $max = INF){
        $value = trim($value);
        return  $value >= $min && $value <= $max ;
    }
}