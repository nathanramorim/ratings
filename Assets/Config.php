<?php
define('PATH_ROOT',__DIR__);
define('PATH_DATA','Databases/');

/** fill in each a name of the file to set the dataset for application */
$less_data_file = array (
    'movies' =>'movies_less.dat', 
    'users' => 'users_less.dat', 
    'ratings' => 'ratings_less.dat' 
);

$data_file = array (
    'movies' =>'movies.dat', 
    'users' => 'users.dat', 
    'ratings' => 'ratings.dat' 
);

define('DATA_FILE',$less_data_file);

