<?php 
ini_set('display_errors', TRUE);
include_once('vendor/autoload.php');


            $samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
            $labels  = [];
            use Phpml\Association\Apriori;
            
            $associator = new Apriori($support = 0.5, $confidence = 0.5);
            $associator->train($samples, $labels);

            $s = $associator->apriori();
            var_dump($s);
        ?>