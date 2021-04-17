<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran Menu</title>
    <link rel="stylesheet" href="./dist/assets/css/app.css">
</head>
<body>

<?php
ini_set('display_errors', 1);
include 'vendor/autoload.php';

\Api\DBClass::getTableMenu();
?>

<div id="app">
    <home_component/>
</div>

<script src="./dist/assets/js/app.js"></script>
</body>
</html>
