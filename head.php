<?php
include "funcoes.php";
$usuario = logarUsuario("Vinicius Gasiunas", 1);


$usuario = logarUsuario("Vinicius Gasiunas", 1);

$usuario = ["logado" => true, "nome"=> "Vinicius Gasiunas","nivelAcesso" => 0]; 
//$usuario = "";

$produtos = [
      "produto1" => ["nome"=>"Curso FullStack", "descricao"=>"vai codar até sangrar os dedos", "preco"=> 1700, "img"=>"img/produto2.jpg"], 
      "produto2" => ["nome"=> "Curso Mobile IOS", "descricao"=>"O curso te ensina a criar APP's (Linux > All)", "preco"=>1500, "img"=>"img/produto1.jpg"],
      "produto3" => ["nome"=>"Curso Mobile Android", "descricao"=>"o curso vai te ensinar app para Android (eca !!!)", "preco"=> 1500, "img"=>"img/produto3.jpg"], 
      "produto4" => ["nome"=> "Data Science", "descricao"=>"O curso vai fritar seu cérebro", "preco"=>5000, "img"=>"img/produto4.jpeg"],
];

$produtos = addProduto("Curso de UX","Curso sensashow", 5000, "img/ux.png", $produtos);
$produtos = addProduto("Curso de Data Analytics","Curso mais ou menos sensashow", 7000, "img/cover.png", $produtos);
$categorias = ["Cursos", "Tutoriais", "Artigos", "Forum", "Códigos"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
     <!-- Bootstrap !-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>