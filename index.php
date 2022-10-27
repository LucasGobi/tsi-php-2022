<?php
$nome = 'Amanda';
echo "Olá $nome";
//for
    for($i=1; $i <=10; $i++){
        echo "Amanda<br>";
    }
//Comentário de linha
#Comentário de linha
/*
Comentário
de
bloco
*/
//DOCUMENTAÇÃO DO PHP FICA EM: https:://www.php.net
//while
$i = 0;
    while ($i <= 10){
        echo "Amanda <br>";
        $i++;
}
//do while
$i = 0;
do{
    echo "Amanda <br>";
    $i++;
}while($i <10 );
//fim do looping
//if
if (5 > 10){
    echo "5 não é menor que 10";
}else{
    echo "5 não é maior que 10";
}
//fim condicionais
//switch
$diaSemana = 4; //variável 
switch($diaSemana){
    case 0: //comando
        echo "Domingo"; //escreva na tela
        break; //acaba comando
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
    case 6:
        echo "Sábado";
        break;
    default: //não está declarado, se pronuncia "defou"
    echo "Número inválido!";
}