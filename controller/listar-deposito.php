<?php  


require_once("../model/Deposito.php");
require_once("../model/DepositoDao.php");
require_once("../model/ConnectionFactory.php");

$factory = new ConnectionFactory();

$depositoDao = new DepositoDao($factory->getConnection());

$depositos = $depositoDao->listar();

echo json_encode($depositos);

?>