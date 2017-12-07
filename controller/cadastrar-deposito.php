<?php  

require_once("../model/deposito.php");
require_once("../model/depositoDao.php");
require_once("../model/ConnectionFactory.php");

$factory = new ConnectionFactory();

$DepositoDao = new DepositoDao($factory->getConnection());

$deposito = new Deposito();

$deposito->setTipoDeposito($_POST['tipoDeposito']);
$deposito->setBancoDestino($_POST['bancoDestino']);
$deposito->setValorDeposito($_POST['valorDeposito']);
$deposito->setDescricao($_POST['descricao']);
//$deposito->setStatus($_POST['descricao']);
$deposito->setStatus('Pendente');

$date = new DateTime();

$deposito->setData($date->format("Y-m-d H:i:s"));

print_r($deposito);



if($DepositoDao->cadastrar($deposito)
){
	echo "success";
}else{
	echo "error";
}

?>