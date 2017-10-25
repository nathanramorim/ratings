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
    
    /** Retorna a lista atribuida 1 para os filmes que foram avaliados pelos  n usuários */
    public function mt($movies,$users,$ratings){
        $msize = count($movies);
        $usize = count($users);
        $rusize = count($ratings->userid);
        $rmsize = count($ratings->movieid);
        foreach($ratings->userid as $ku => $u){
            foreach($ratings->movieid as $km => $k){
                $us = (isset($users[$ku])) ? 1 : 0;
                $mo = (isset($movies[$km])) ? 1 : 0;
                $a[$ku][$km] = ($us == 1 && $mo == 1) ? 1:0;
            }
        }
        return $a;
    }

    /** cálculo de similaridade do cosseno */
    function similary_coss($list){
        $sizeof = count($list[1])-1;
       
        for ($i=1; $i <= $sizeof ; $i++) { 
            $arr['numerator'][$i] = $this->sum_numerator($list[$i],$list[$i+1]);
        }
       
        for ($i=1; $i <= $sizeof ; $i++) { 
            $sum[$i] = $this->mult_denominator($list[$i],$list[$i+1]);
        }
		for($i = 1; $i <= $sizeof; $i++){
			$arr['denominator'][$i] = sqrt($sum[$i]['first'])*sqrt($sum[$i]['second']);
		}
		for($i = 1; $i <= $sizeof; $i++){
            $calc = ($arr['numerator'][$i]/$arr['denominator'][$i])*100;
            $result[$i] = number_format($calc,5).'%';
        }
        return $result;

    }

    /**monta a lista dos numeradores (soma de B1 e B2) */
    public function get_list_numerator($list){ 
        $size = sizeof($list);
        for ($i=1; $i <= 10 ; $i++) { 
            $l1 = (isset($list[$i])) ? $list[$i] : 0;
            $l2 = (isset($list[$i+1])) ? $list[$i+1] : 0;
            $arr[$i] = $this->sum_numerator($list[$i],$list[$i+1]);
            $conf[$i] = $list[$i];
        }
        return $arr;
    }

    /**soma B1+B2 */
    public function sum_numerator($list,$list2){
        
        $result = 0;
        foreach($list as $v1){
            
            foreach($list2 as $v2){
               
                $result += $v1+$v2;
            }
        }
        return $result;
    }
                
    /** monta a lista dos denominadores (somatório e exponencial B1² e B2²) */
    public function get_list_denominator($list){
		$size = sizeof($list);
        for ($i=1; $i <= 10 ; $i++) { 
            $sum[$i] = $this->mult_denominator($list[$i],$list[$i+1]);
        }
		for($i = 1; $i <= 10; $i++){
			$arr['denominator'][$i] = sqrt($sum[$i]['first'])*sqrt($sum[$i]['second']);
		}
        return $arr;
	}
    
    /** (somatório e exponencial B1² e B2²) */
	public function mult_denominator($list,$list2){
		$result['first'] =0;
        $result['second'] =0; 
       
        foreach($list as $v1){
            foreach($list2 as $v2){
                $result['first'] += $v1^2;
				$result['second'] += $v2^2;
            }
        }
        
        return $result;
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

}
