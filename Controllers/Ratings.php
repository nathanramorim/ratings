<?php
namespace controllers;
use controllers\Data;

class Ratings extends Data{
    function __construct(){}

    public static function print_arrays(){
        $arr = self::get_data();
        $lenght = max($arr);
        
        for ($i=1; $i < $lenght ; $i++) { 
            $user = (isset($arr['user'][$i]))? $arr['user'][$i]:NULL;
            $movies = (isset($arr['movies'][$i]))? $arr['movies'][$i]:NULL;
            $rating = (isset($arr['rating'][$i]))? $arr['rating'][$i]:NULL;
            $is_rating = (isset($arr['is_rating'][$i]))? $arr['is_rating'][$i]:NULL;
                
            echo "<tr scope='row'><td>{$user}</td><td>{$movies}</td><td>{$rating}</td><td>{$is_rating}</td></tr>";
        }
               
    }

    public function count_ratings(){
        $arr = self::get_data();
        $count = 0;
        foreach($arr['is_rating'] as $is_rating){
            
            $count += ($is_rating == 1)? 1:0; 
        }
        return $count;
    }

    public function get_full_data(){
        $arr = self::get_data();
        return $arr;
    }
}
