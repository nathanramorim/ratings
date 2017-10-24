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
        <?php /** se existe @param array $list, destrua */ ?>
        <?php if(isset($list)){unset($list);} ?>

        <?php /** Retorna a lista atribuida 1 para os filmes que foram avaliados pelos  n usuários  */ ?>
        <?php $list = $ml->mt($movies->id,$users->id,$ratings); ?>

        <?php /**retorna comparação e multiplicação das linhas já avaliadas */ ?>
        <?php $result = print_ma($ml->get_list_calc($list)); ?>
        <?php var_dump($result) ?>
    </section>
</body>
<script async src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</html>