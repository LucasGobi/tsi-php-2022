<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Recebe os dados que está vindo do formulário
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];
//Faz consulta no BD
$stmt = $bd->prepare("UPDATE alunos 
                        SET nome = :nome;
                        turno = : turno,
                        incio = :inicio
                        WHERE
                            id = :id");
$stmt-> bindParam(':nome', $nome);
$stmt-> bindParam(':turno', $turno);
$stmt-> bindParam(':inicio', $inicio);
$smtm->execute();
$atualizou = false;
if($stmt->rowCount() > 0){
    $atualizou = true;
}
include 'listar.php';