<!DOCTYPE html>
<?php include_once('vendor/autoload.php'); ?>
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
<?php use controllers\Ratings; ?>
<?php $ratings = new Ratings(); ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Machine Learning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

</head>
<body>
    <section class="container">
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
            <?php $ratings::print_arrays('user_id'); ?>
        </tbody>
    </table>
    </section>
</body>
<script async src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</html>