<?php 
namespace controllers;
class Data{
    function __construct(){}
    protected static function get_data(){
        
        $data = fopen(DATA_FILE,'r');
        if ($data) {
            $i = 1;
            while (!feof($data)){
                list($user[$i],$movies[$i],$rating[$i]) = explode ('@',fgets($data));
                $i++;
            }
            $list = array ('user' => $user,'movies' => $movies, 'rating' => $rating);
            return $list;
            fclose($data);
        } else {
            // error opening the file.
        } 
        
    }
}
