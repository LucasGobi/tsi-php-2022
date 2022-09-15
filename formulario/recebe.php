<?php

echo "Bem vindo " . $_POST["nomeUsuario"] . "<pre>";


echo "IDADE: " . $_POST["idadeUsuario"] . " anos" . "<pre>";


echo "CPF: " . $_POST["cpfUsuario"] . "<pre>";

echo "Periodo: " . $_POST["periodoUsuario"] . "<pre>";


$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv', 'a'); //abro o arquivo para aprend

fwrite($arquivo, "$nome,$idade,$cpf,$periodo\r\n");
fclose($arquivo);