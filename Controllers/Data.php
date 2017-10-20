<?php 
namespace controllers;
\BasicExcel\Reader::registerAutoloader();

class Data{
    function __construct(){
        
    }
    // protected static function get_data(){
        
    //     $data = fopen(DATA_FILE,'r');
    //     if ($data) {
    //         $i = 1;
    //         while (!feof($data)){
    //              $lines = explode ('@',fgets($data));
    //              #$l = explode ('',$lines[0]);
                
                 
    //              foreach($lines as $value){
    //                 list($user[$i+3],$movies[$i+3],$rating[$i+3]) = explode ('@',$value);
    //                 return ($value);
    //             }
    //             $i++;
    //         }
    //         $list = array ('user' => $user,'movies' => $movies, 'rating' => $rating);
    //         #return $list;
    //         fclose($data);
    //     } else {
    //         // error opening the file.
    //     } 
        
    // }

    protected static function get_data(){
        $user = array();
        $movies = array();
        $rating = array();

        $data = file(DATA_FILE);
        $i = 1;
        foreach($data as $ln){
            $list = explode ('@',$ln);
            $user[$i] = $list[0];
            $movies[$i] = $list[1];
            $rating[$i] = $list[2];

            $i++;
            
            
        }

        $list = array ('user' => $user,'movies' => $movies, 'rating' => $rating);
        return $list;
       
    }
}
