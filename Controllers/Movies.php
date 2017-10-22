<?php
namespace controllers;
use controllers\Data;

class Movies extends Data{
    public $id;
    public $title;
    public $genres;

    public function get_ids(){
        $data = self::get_array_data('movies.dat','::');
        
        foreach ($data as $ln) {
            if (isset($ln[0])){
                $this->id[$ln[0]] = $ln[0];
            }
        }
        return $this->id;
    }
    
    public function get_titles(){
        $data = self::get_array_data('movies.dat','::');
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[1])){
                $this->titles[$ln[0]] = $ln[1];
            }
        }
        return $this->titles;
    }

    public function get_genres(){
        $data = self::get_array_data('movies.dat','::');
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[2])){
                $this->genres[$ln[0]] = $ln[2];
            }
        }
        return $this->genres;
    }
}


