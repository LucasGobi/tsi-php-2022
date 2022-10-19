<?php
//Buscamos o codigo que conecta SGBD
require_once '../bancoDeDados/conecta.php';
//Na linha 3 estamos trazendo todo o codigo de 
//../bancoDeDados/conecta.php para este codigo
//Include_once(); não gera erro fatal se nao existir

//Dados provenientes de fornulari HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = 
    $bd->prepare('INSERT INTO alunos 
                    (nome, turno, inicio)
                VALUES
                    (:nome, :turno, :inicio)');
/*
Função prepare esta retornando outr variavel (objeto),
essa outra variavel consegue juntar os dados do usuario
com a consulta SQL
*/


$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio', $inicio);
/*
A função $consulta->bindParam() substitui
os rotulos (ex.:'nome') pelos daodos inseguros
*/

if($consulta->execute()){
    echo "Gravou com sucesso!";
} else{
    echo "Erro ao gravar no banco de dados!";
}