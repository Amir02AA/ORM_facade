<?php

$config = [
    'dsn' => 'mysql:host=localhost;dbname=orm_facade',
    'user' => 'root',
    'password' => ''
];
$pdo = new PDO($config['dsn'],$config['user'],$config['password']);

$builder = new SqlQueryBuilder($pdo);