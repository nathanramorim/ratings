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
        $i=1;
        foreach ($data as $ln) {
            if (isset($ln[0])){
                $this->userid[$i] = $ln[0];
            }
            $i++;
        }
        return $this->userid;
    }

    private function get_movieid(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        $i = 1;
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[1])){
                $this->movieid[$i] = $ln[1];
            }
            $i++;
        }
        return $this->movieid;
    }

    private function get_rating(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        $i = 1;
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[2])){
                $this->rating[$i] = $ln[2];
            }
            $i++;
        }
        return $this->rating;
    }

    private function get_timestamp(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        $i = 1;
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[3])){
                $this->timestamp[$i] = $ln[3];
            }
            $i++;
        }
        return $this->timestamp;
    }
    

    public function count_ratings(){
        $arr = $this->get_rating();
        $size = sizeof($arr);
        return $size;
    }

    
}
