<?php
function pessoa(){



$sexo = [
    "Masculino",
    "Feminino"             
];

$nome_masculino = [
    "José",
    "Hian",
    "Diogo",
    "Caio",
    "Joao",
    "Gustavo",
    "Eric",
    "Marco"
];

$nome_feminino = [
    "Alana",
    "Duda",
    "Gabriela",
    "Emily",
    "Giovana",
    "Maria",
    "Joana",
    "Leticia"
];

$sobrenomes = [
    "Barbosa",
    "Alves",
    "Almeida",
    "Oliveira",
    "Santana",
    "Batista",
    "Borges",
    "Campos"
];

$idade_minima = 18;

$idade_maxima = 75;

$min = 0;
$max = -1;

$index_sexo = $sexo[rand(0, count($sexo) -1)];
$index_masculino = $nome_masculino[rand(0,count($nome_masculino)-1)];
$index_feminino =  $nome_feminino[rand(0,count($nome_feminino)-1)];
$index_sobrenome = $sobrenomes[rand(0,count($sobrenomes)-1)];
$valor_da_idade = rand(18,75);


if($index_sexo == "Masculino"){
    $nome = $nome_masculino[rand(0,count($nome_masculino )-1)]; 
}else{
    $nome = $nome_feminino[rand(0,count($nome_feminino)-1)];

}
$sobre = $sobrenomes[ $index_sobrenome ];
$sex = $sexo[
    $index_sexo
];

$nome_aleatorio = [
     "nome" => "$nome",
     "sexo" => "$index_sexo", 
    "idade" => $valor_da_idade,
    "sobrenome" => "$index_sobrenome"
];

return $nome_aleatorio;
};













































?> 