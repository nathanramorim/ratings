<?php 
namespace controllers;

use controllers\Ratings;
use controllers\Movies;
use controllers\Users;

class Mlearning {
    public $movies;
    public $users;
    public $ratings;
    
    /** instancia cada um das minhas base de dados [-] a configuração dos arquivos movies,users e ratings podem ser feitas em Assets/Config.php */
    public function __construct(array $file_name, string $demilimiter){
        $this->movies = new Movies($file_name['movies'],$demilimiter);
        $this->users = new Users($file_name['users'],$demilimiter);
        $this->ratings = new Ratings($file_name['ratings'],$demilimiter);
    }

    /** imprime as colunas legenda */
    public function print_thead($columns){
        echo '<tr>';
        echo '<th></th>';
        foreach ($columns as $col){
            echo '<th style="min-width:250px; font-size:10px;" class="text-center">'.$col.'</th>';
        }
        echo '</tr>';
    }
    
    /** imprime as linhas legenda */
    public function print_rows ($rows){
        foreach($rows as $ln){
            echo '<tr><td>'.$ln.'</td><tr>';
           
        }
    }
    
    /** Retorna a lista atribuida 1 para os filmes que foram avaliados pelos  n usuários */
    public function mt($movies,$users,$ratings){
        foreach($ratings->userid as $ku => $u){
            $us = (isset($users[$ku])) ? 1 : 0;
            foreach($ratings->movieid as $km => $k){
                $mo = (isset($movies[$km])) ? 1 : 0;
                $a[$ku][$km] = ($us == 1 && $mo == 1) ? 1:0;
            }
        }
        return $a;
    }

    /**retorna comparação e multiplicação das linhas já avaliadas */
    public function get_list_calc($list){ 
        $size = sizeof($list);
        for ($i=1; $i <= 10 ; $i++) { 
            $arr[] = $this->calc_sim($list[$i],$list[$i+1]);
        }
        return $arr;
    }

    /**multiplica dois arrays */
    public function calc_sim($list,$list2){
        foreach($list as $v1){
            foreach($list2 as $v2){
                $result[] = $v1*$v2;
            }
        }
        return $result;
    }
                
                            
    

}
