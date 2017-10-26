<?php 
namespace controllers;

class Data{
    function __construct(){}

    protected static function get_array_data($file,$delimiter){
        $load_file = PATH_DATA.$file; 
        $data_file = fopen($load_file,'r');
        $i = 1;
        while (!feof($data_file)){
            $data[$i] = explode($delimiter,fgets($data_file));
            $i++;
        }
        fclose($data_file);
        return $data;
    }
}
