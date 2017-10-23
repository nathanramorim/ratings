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
    <nav class="container">
        <article></article>
        <article class="text-center alert alert-warning">Found <?php echo sizeof($movies->id) ?> movies </article>
        <article></article>
    </nav>
    <section class="container">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr scope="row">
                    <?php $ml->print_cols($movies->title) ;?>
                </tr>
            </thead>
            <tbody>
                    
                    <?php $ml->print_rows($users->id) ?>
                
            </tbody>
        </table>
    </section>
    <section class="container" id="ml-library">
        
    </section>
</body>
<script async src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</html>