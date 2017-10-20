<?php
namespace controllers;
use controllers\Data;

class Ratings extends Data{
    function __construct(){}

    public static function print_arrays($group){
        $arr = self::get_data();
        $lenght = max($arr);
        
        for ($i=1; $i < $lenght ; $i++) { 
            $user = (isset($arr['user'][$i]))? $arr['user'][$i]:NULL;
            $movies = (isset($arr['movies'][$i]))? $arr['movies'][$i]:NULL;
            $rating = (isset($arr['rating'][$i]))? $arr['rating'][$i]:NULL;
            $validade[$arr['user'][$i]] = ($arr['user'][$i] == $arr['user'][$i+1] && !empty($rating)) ? 1:0;
                
            echo "<tr scope='row'><td>{$user}</td><td>{$movies}</td><td>{$rating}</td><td>{$validade[$arr['user'][$i]]}</td></tr>";
        }
               
    }
}
