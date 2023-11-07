<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("171","Filipe Gabriel","113,00");
$cliente = new Cliente("00001","Filipe Gabriel","14526789",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirCodigo();
