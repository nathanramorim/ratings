<!DOCTYPE html>
<?php include_once('vendor/autoload.php'); ?>
<?php use controllers\Mlearning; ?>
<?php $ml = new Mlearning(DATA_FILE,'::') ?>
<?php $movies = $ml->movies ?>
<?php $ratings = $ml->ratings ?>
<?php $users = $ml->users ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Machine Learning | Vocês são os melhores!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

</head>
<body>
    <header class="container-fluid">
        <h1 class="text-center">Experimento utilizando o conceito de Bag of Words</h1>
    </header>
    <section class="container" id="ml-library">
        <pre>
        <?php /** se existe @param array $list, destrua */ ?>
        <?php if(isset($list)){unset($list);} ?>

        <?php /** Retorna a lista atribuida 1 para os filmes que foram avaliados pelos  n usuários  */ ?>
        <?php $list = $ml->mt($ratings); ?>
        <?php var_dump($list); ?>
        <?php 
            /**
             * $ml é objeto de Mlearning la na linha 4 o objeto foi criado $ml = new Mleaning(DATA_FILE,'::') 
             * passado por parâmetro a base de dados que está configurada em Assets/Config.php e o separador de colunas
             * */
        ?> 	
		
        <?php /**retorna a similaridade do cosseno entre os filmes avaliados */ ?>
        <?php #var_dump($ml->similary_coss($list)); ?>
        </pre>
    </section>
</body>
<script async src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</html>