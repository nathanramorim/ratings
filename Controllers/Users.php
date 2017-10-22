<?php
namespace controllers;
use controllers\Data;

class Users extends Data{
    public $id;
    public $gender;
    public $age;
    public $occupation;
    public $zipcode;

    public $file_name;
    public $delimiter;

    public function __construct ($file,$delimiter){
        $this->file_name = $file;
        $this->delimiter = $delimiter;
        $this->get_ids();
        $this->get_gender();
        $this->get_age();
        $this->get_occupation();
        $this->get_zipcode();
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
    
    private function get_gender(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[1])){
                $this->gender[$ln[0]] = $ln[1];
            }
        }
        return $this->gender;
    }

    private function get_age(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[2])){
                $this->age[$ln[0]] = $ln[2];
            }
        }
        return $this->age;
    }
    
    private function get_occupation(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[3])){
                $this->occupation[$ln[0]] = $ln[3];
            }
        }
        return $this->occupation;
    }

    private function get_zipcode(){
        $data = self::get_array_data($this->file_name,$this->delimiter);
        
        foreach ($data as $ln) {
            if (isset($ln[0]) && isset($ln[4])){
                $this->zipcode[$ln[0]] = $ln[4];
            }
        }
        return $this->zipcode;
    }
    
}


