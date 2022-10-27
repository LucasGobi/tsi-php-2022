<?php
//Dados para nos conectarmos ao SGBD
$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'root'; //usuário administrador
$pass = '';
//Conectamos ao SGBD
$bd = new PDO($dsn, $user, $pass);