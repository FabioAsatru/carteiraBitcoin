




<?php
//Compo E-mail




$tipoDeposito = $_POST["name"];
$bancoDestino = $_POST["name"];
$valorDeposito = $_POST["name"];
$comissao = $_POST["name"];
$descricao = 'teste';
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');



$tipoDeposito = 'TED';
$email = 'fabi@email';
$telefone = '928283733';
$opcoes = 'teste';
$mensagem = 'teste';
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');



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
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }


  
?>
















