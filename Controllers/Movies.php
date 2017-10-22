<?php
namespace controllers;
use controllers\Data;

class Movies extends Data{
    public $id;
    public $title;
    public $genres;

    public $file_name;
    public $delimiter;

    public function __construct ($file,$delimiter){
        $this->file_name = $file;
        $this->delimiter = $delimiter;
        $this->get_ids();
        $this->get_titles();
        $this->get_genres();

    }

    private function get_ids(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0])){
                $this->id[$ln[0]] = $ln[0];
            }
        }
        return $this->id;
    }
    
    private function get_titles(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[1])){
                $this->titles[$ln[0]] = $ln[1];
            }
        }
        return $this->titles;
    }

    private function get_genres(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[2])){
                $this->genres[$ln[0]] = $ln[2];
            }
        }
        return $this->genres;
    }
}


