<?php 
namespace controllers;

use controllers\Ratings;
use controllers\Movies;
use controllers\Users;

class Mlearning {
    public $movies;
    public $users;
    public $ratings;
    
    public function __construct(array $file_name, string $demilimiter){
        $this->movies = new Movies($file_name['movies'],$demilimiter);
        $this->users = new Users($file_name['users'],$demilimiter);
        $this->ratings = new Ratings($file_name['ratings'],$demilimiter);
    }

    public function print_thead($columns){
        echo '<tr>';
        echo '<th></th>';
        foreach ($columns as $col){
            echo '<th style="min-width:250px; font-size:10px;" class="text-center">'.$col.'</th>';
        }
        echo '</tr>';
    }
    
    public function print_rows ($rows){
        foreach($rows as $ln){
            echo '<tr><td>'.$ln.'</td><tr>';
           
        }
    }

    public function mt($movies,$users,$ratings){
        foreach($ratings->userid as $ku => $u){
            $i=0;
            $us = (isset($users[$ku])) ? 1 : 0;
            foreach($ratings->movieid as $km => $k){
                $j=0;
                $mo = (isset($movies[$km])) ? 1 : 0;
                $a[$i][$j]= ($us == 1 && $mo == 1) ? 1:0;
                $j++;$i++;
            }
        }
        return $a;
    }

    public function arr_key($key,$arr){
        return array_key_exists ($key,$arr);
    }

   
}
