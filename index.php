<!DOCTYPE html>
<?php include_once('vendor/autoload.php'); ?>
<?php use controllers\Ratings; ?>
<?php use controllers\Movies; ?>
<?php use controllers\Users; ?>
<?php $movies = new Movies('movies.dat','::'); ?>
<?php $users = new Users('users.dat','::'); ?>
<?php $ratings = new Ratings('ratings.dat','::'); ?>

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
        <article class="text-center alert alert-warning">Found <?php echo $ratings->count_ratings() ?> ratings for movies </article>
        <article></article>
    </nav>
    <section class="container" style="display:none">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr scope="row">
                    <th class="text-center">id user</th>
                    <th class="text-center">id movie</th>
                    <th class="text-center">rating</th>
                    <th class="text-center">is rating?</th>
                </tr>
            </thead>
            <tbody>
                <?php #$ratings::print_arrays(); ?>
            </tbody>
        </table>
    </section>
    <section class="container" id="ml-library">
        <?php var_dump($ratings->userid); ?>
    </section>
</body>
<script async src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</html>