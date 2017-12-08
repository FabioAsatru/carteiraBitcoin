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


$tipoDeposito = $deposito->getTipoDeposito();

$date = new DateTime();

$deposito->setData($date->format("Y-m-d H:i:s"));

print_r($deposito);



if($DepositoDao->cadastrar($deposito)
){
	echo "success";
	//Envia Email
	
	
  $arquivo = "  
            <h3>Você iniciou uma operação de depósito de Reais para sua conta na AraBitcoin.
            Para concluir, é necessário:</h3>

            <h4>
            1) $tipoDeposito
            (IMPORTANTE: o titular da sua conta bancária deve ser o mesmo titular da sua conta do Mercado Bitcoin)
            </h4>


            <p>MERCADO BITCOIN SERVIÇOS DIGITAIS LTDA.</p>
            <p>CNPJ: ******************</p>
            <p>Banco: ******************</p>
            <p>Agência: ****************</p>
            <p>Conta corrente: *********</p>
            
            

            2) Anexar o comprovante na tela de depósitos do Mercado Bitcoin https://www.Adefinir.com.br/BRLBTC/deposito/";



//enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "fabio.asatru@gmail.com";
  $destino = $emailenviar;
  $assunto = "AraBitcoin";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " Success";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

}else{
	echo "error";
}

?>