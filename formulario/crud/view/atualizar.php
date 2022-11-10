<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$stmt = $bd->prepare(" UPDATE alunos
                            SET nome = :nome,
                                turno = :turno
                                inicio = :inicio
                            WHERE
                                id = :id");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':turno', $turno);
$stmt->bindParam(':inicio', $inicio);

$stmt->execute();

var_dump($_POST);