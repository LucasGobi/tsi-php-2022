<?php
//Buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//APENAS P/ FICAR MAIS FACIL O USO
$id = $_GET['id'];

$id = preg_replace('/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id") ){

    $apagou = true;


}else{

    $apagou = false;
}

include 'index.php';