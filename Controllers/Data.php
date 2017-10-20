<?php 
namespace controllers;

class Data{
    function __construct(){
        
    }

    protected static function get_data(){
        $user = array();
        $movies = array();
        $rating = array();
        $is_rating = array();

        $data = file(DATA_FILE);
        $i = 1;
        foreach($data as $ln){
            $list = explode ('@',$ln);
            $user[$i] = $list[0];
            $movies[$i] = $list[1];
            $rating[$i] = $list[2];
            
            $i++;
        }
        for ($is=1; $is < $i; $is++ ){
            $is_rating[$user[$is]] = (isset($rating[$is]) && !empty($rating[$is])) ? 1:0;
        }

        $list = array ('user' => $user,'movies' => $movies, 'rating' => $rating, 'is_rating' => $is_rating );
        return $list;
       
    }
}
