<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>


</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"> Wallet BitCoin <i class="large material-icons">account_balance_wallet</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Sair</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
  <div class="container">

       <!--

      <br><br>
      <h1 class="header center orange-text">Starter Template</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>
    -->
    </div>
  </div>


  <div class="container">

    <!-- view principal -->
    <div id="main" class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 ">
              <div class="icon-block">
                <h2 class="center light-blue-text">     <i class="fa fa-btc" aria-hidden="true"></i></h2>
                <!--<h5 class="center">Último Preço:</h5>-->
                <h3 class="center" style="color:green;" id="btc_preco">R$ 42600,00</h3>
                <p class="center">Preço da Unidade de BitCoin</p>
                
              </div>
        </div>


        <div class="row">
             <div class="col s12 m6">
               <div class="card blue-grey darken-1">
                 <div class="card-content white-text">
                   <span class="card-title">Depósito</span>
                   <p>I am a very simple card. I am good at containing small bits of information.
                   I am convenient because I require little markup to use effectively.</p>
                 </div>
                 <div class="card-action">
                   <button class="btn waves-effect waves-light" type="submit" id="deposito-go" name="action">Entrar
                    <i class="material-icons right">send</i>
                   </button>
                 </div>
               </div>
             </div>

             <div class="col s12 m6">
               <div class="card blue-grey darken-1">
                 <div class="card-content white-text">
                   <span class="card-title">Saque</span>
                   <p>I am a very simple card. I am good at containing small bits of information.
                   I am convenient because I require little markup to use effectively.</p>
                 </div>
                 <div class="card-action">
                   <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                   </button>
                 </div>
               </div>
             </div>

             <div class="col s12 m6">
               <div class="card blue-grey darken-1">
                 <div class="card-content white-text">
                   <span class="card-title">Receber</span>
                   <p>I am a very simple card. I am good at containing small bits of information.
                   I am convenient because I require little markup to use effectively.</p>
                 </div>
                 <div class="card-action">
                   <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                   </button>
                 </div>
               </div>
             </div>

             <div class="col s12 m6">
               <div class="card blue-grey darken-1">
                 <div class="card-content white-text">
                   <span class="card-title">Transferência</span>
                   <p>I am a very simple card. I am good at containing small bits of information.
                   I am convenient because I require little markup to use effectively.</p>
                 </div>
                 <div class="card-action">
                   <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                   </button>
                 </div>
               </div>
             </div>

    
    
    </div>

    

      </div>
      

    </div>

    <!-- view deposito -->
    <div id="deposito" class="deposito" hidden>

            <!--<h1>Deposito <i class="fa fa-money" aria-hidden="true"></i></h1>-->

          <h4 class="light">Novo Deposito</h4>  
          <div class="row">

          <form  class="col s12" id="cadastrar-deposito">
            <div class="row">
            
              <div class="input-field col s6">
                <select id="tipoDeposito" name="tipoDeposito">
                  <option value="" disabled selected>Escolha uma opção</option>
                  <option value="Transferência entre contas (mesmo banco)">Transferência entre contas (mesmo banco) </option>
                  <option value="TED (Apartir de R$50,00)">TED (Apartir de R$50,00)</option>
                  <option value="DOC (até R$499,99)">DOC (até R$499,99)</option>
                </select>
                <label>Tipo de Depósito</label>
              </div>  

            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <select id="bancoDestino" name="bancoDestino">
                  <option value="" disabled selected>Escolha uma opção</option>
                  <option value="1">Banco do Brasil </option>
                  <option value="2">Santander</option>
                  <option value="3">Bradesco</option>
                </select>
                <label>Banco de Destino</label>
              </div>  
            </div>


            <div class="row">
              <div class="input-field col s4">
                <input id="valorDeposito" name="valorDeposito" type="text">
                <label for="valorDeposito">Valor do Depósito R$</label>
              </div>
            </div>


            <div class="row">
              <div class="input-field col s4">
                <input id="valorComissao" type="text">
                <label for="valorComissao">Comissão R$ (1,99% + R$ 2,90)</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s4">
                <input id="valorCreditado" type="text">
                <label for="valorCreditado">Será creditado R$</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s8">
                <input id="descricao" name="descricao" type="text">
                <label for="valorCreditado">Descrição</label>
              </div>
            </div>

            <div class="row">
              
              <div class="col s6 offset-s6">
                <button class="btn waves-effect waves-light" type="submit" id="btn-cadastrar" name="action">Enviar<i class="material-icons right">send</i></button>
              </div>
            </div>

            </div>

          </form>
        </div>
              

    </div>



    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        
        </div>
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
  
    $(document).ready(function(){
    

      $.ajax({
        method: "GET",
        url: "https://www.mercadobitcoin.com.br/api/ticker/",
        dataType: 'json'
      })
        .done(function( data ) {
          console.log(data);
          console.log(data.ticker.buy);
          var btc = data.ticker.buy;
          btc =  parseFloat(btc).toFixed(2);
          
          btc.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
          console.log(btc);  
          $('#btc_preco').text('R$ '+ btc);

          var atual = 600000.00;

          //com R$
          //var f = atual.

          //sem R$
          var f2 = atual.toLocaleString('pt-br', {minimumFractionDigits: 2});

          //console.log(f);
          console.log(f2);



        });
        

        $('#deposito-go').click(function(event){
              console.log('teste');
              event.preventDefault();
              $('#main').hide();
              $('#deposito').show();  

        });


          $('select').material_select();
  
  
  
        //cadastrar deposito
        $("#btn-cadastrar").click(function(e){
          e.preventDefault();
          console.log($("#cadastrar-deposito").serialize());
          console.log('passou aqui');
          $.ajax({
            url : "http://localhost/carteiraBitcoin/controller/cadastrar-deposito.php",
            type : "post",
            data : $("#cadastrar-deposito").serialize(),

            success : function(result){
              
            },

            error : function(result){
              alert("FAIL");
            }
          })
        })
  
  
  
  
  
  
  
  
  
  
  
  
  
    });
  

  
  </script>




  </body>
</html>
