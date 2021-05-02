<?php

namespace helper;

class MathHelper{
    static public $name = "MathHelper";


    static public function sum(int... $number){
        $total = 0;
        foreach($number as $number ){
            $total += $number;
        }
        return $total;
    }
}