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
    
    public function mount_matrix (){
        for ($row = 1; $row <= $row_size; $row++){
            
            for ($col = 1; $col <= $col_size; $col++){

            }

        }
        
    }
}
