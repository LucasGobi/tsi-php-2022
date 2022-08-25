<?php
$nome = 'Lucas'; // variavel

echo "Olá $nome!<br>";



//comentário de linha
#comentário de linha

//DOCUMENTAÇÃO DO PHP FICA EM: htts://www.php.net


// Repetição com for
for ($x = 0; $x <= 10; $x++) {
  echo "Lucas <br>";
}

// Repetição com while
$x= 0;

while($x <= 100) {

    echo "Gobi <br>";
    $x+=10;
}

// Repetição com Do While
$x = 0;

do {
    echo "Assalim<br>";
    $x++;
}
while ($x < 10);

$x = 5;


//IF
if ($x < 10)
    echo "5 é menor que 10";



//switch

echo"<br>";

$diaSemana = 3;

switch($diaSemana) {
    
// break para parar o case
    case 0:
        echo "Domingo";
        break;
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
        echo "Sabado";
        break;
    default:
        echo "Numero invalido";
}








