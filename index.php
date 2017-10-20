<!DOCTYPE html>
<?php include_once('vendor/autoload.php'); ?>
<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Machine Learning</title>
</head>
<body>

    <?php use controllers\Ratings; ?>
    <pre>
    <?php $ratings = new Ratings(); ?>
    </pre>
</body>
</html>