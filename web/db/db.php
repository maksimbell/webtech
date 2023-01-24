<?php

$config = require_once 'config.php';

$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
$connect = new PDO($dsn, $config['username'], $config['password']);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $connect->prepare("SELECT * FROM games");
$sth->execute();
$prods = $sth->fetchAll();

