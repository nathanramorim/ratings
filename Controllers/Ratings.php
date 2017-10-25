<?php
namespace controllers;
use controllers\Data;

class Ratings extends Data{
    
    public $userid;
    public $movieid;
    public $rating;
    public $timestamp;

    public $file_name;
    public $delimiter;

    public function __construct ($file,$delimiter){
        $this->file_name = $file;
        $this->delimiter = $delimiter;
        $this->get_userid();
        $this->get_movieid();
        $this->get_rating();
        $this->get_timestamp();

    }

    private function get_userid(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0])){
                $this->userid[$ln[0]] = $ln[0];
            }
        }
        return $this->userid;
    }

    private function get_movieid(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[1])){
                $this->movieid[$ln[0]] = $ln[1];
            }
        }
        return $this->movieid;
    }

    private function get_rating(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[2])){
                $this->rating[$ln[0]] = $ln[2];
            }
        }
        return $this->rating;
    }

    private function get_timestamp(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[3])){
                $this->timestamp[$ln[0]] = $ln[3];
            }
        }
        return $this->timestamp;
    }
    

    public function count_ratings(){
        $arr = $this->get_rating();
        $size = sizeof($arr);
        return $size;
    }

    
}
