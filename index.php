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
                   <button class="btn waves-effect waves-light" type="submit" id="saque-go" name="action">Entrar
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

        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

        <!-- modal deposito -->

             <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h4>Intruções</h4>
                  
                   <p>1. Abra o seu internet Banking.</p>
                    <p>2. Inicie a transferência para a seguinte conta:</p>
                    <p>Nome do Banco: Bradesco</p>
                    <p>Agência: 0008</p>
                    <p>Número da Conta: 914-8</p>
                    <p>Títular da conta: FoxBit serviços digitais LTDA</p>
                    <p>CNPJ: 21.246.584/0001-50</p>
                    <p>3. Tire uma foto ou um print screen do comprovante</p>
          
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Entedi</a>
                </div>
              </div>
        <!-- modal deposito -->














            <!--<h1>Deposito <i class="fa fa-money" aria-hidden="true"></i></h1>-->

          <h4 class="light">Novo Deposito</h4>  
          <div class="row">

          <form  class="col s12" id="cadastrar-deposito">
            <div class="row">
            
              <div class="input-field col s6">
                <select id="tipoDeposito" name="tipoDeposito" required>
                  <option value=""  selected  disable>Escolha uma opção</option>
                  <option value="Caixa Econômica Federal">Caixa Econômica Federal</option>
                  <option value="Banco do Brasil">Banco do Brasil</option>
                  <option value="Bradesco">Bradesco</option>
                  <option value="Outros Bancos">Outros Bancos</option>
                  <option value="Dinheiro na boca do caixa">Dinheiro na boca do caixa</option>
                  <option value="Moneygram">Moneygram</option>
                </select>
                <label>Tipo de Depósito</label>
              </div>  

            </div>
            
            <div class="row" hidden>
              <div class="input-field col s6">
                <select id="bancoDestino" name="bancoDestino" required>
                  <option value=""  selected disable>Escolha uma opção</option>
                  <option value="Banco do Brasil">Banco do Brasil </option>
                  <option value="Santander">Santander</option>
                  <option value="Bradesco">Bradesco</option>
                </select>
                <label>Banco de Destino</label>
              </div>  
            </div>

            
           <div class="row">
              <div class="input-field col s4">
               <h7>Valor do Deposito</h7>
              <input type="text" id="valorDeposito" name="valorDeposito" data-thousands="." data-decimal="," data-prefix="R$ " />
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
              

        <section class="row" id="depositos"></section>  






    </div>
    <!-- END view deposito -->
    
    <!-- view Saque -->
    <div id="saque" class="saque" hidden>

            <!--<h1>Deposito <i class="fa fa-money" aria-hidden="true"></i></h1>-->

          <h4 class="light">Novo Saque</h4>  
          <div class="row">

          <form  class="col s12" id="cadastrar-saque">
            <div class="row">
            
            <div class="row">
              <div class="input-field col s6">
                <input id="contaBancaria" name="contaBancaria" type="text">
                <label for="contaBancaria">Conta Bancaria</label>
              </div>
            </div>

            
           <div class="row">
              <div class="input-field col s4">
               <h7>Valor do Saque</h7>
              <input type="text" id="valorSaque" name="valorSaque" data-thousands="." data-decimal="," data-prefix="R$ " />
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
                <label for="valorCreditado">Será Depositado R$</label>
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
                <button class="btn waves-effect waves-light" type="submit" id="btn-saque-cadastrar" name="action">Enviar<i class="material-icons right">send</i></button>
              </div>
            </div>

            </div>

          </form>
        </div>
              

        <section class="row" id="depositos"></section>  






    </div>


    <!-- END view Saque -->








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
  <script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script>

     $('#modal1').modal();
          







    $(document).ready(function(){
    
      //listar depositos
      function listarDeposito(){
        $.ajax({
          url : "http://localhost/carteiraBitcoin/controller/listar-deposito.php",
          dataType : "json",

          success : function(result){
            if(result != 0){
              /*var html = '<br><br><ul class="collection with-header container">';
              html += '<li class="collection-header"><h4>Cursos</h4></li>';			
               console.log(result); 

              $.each(result, function(index,curso){
                html += '<li class="collection-item"><div>'+curso.id_deposito+'<a href="#!" onclick="excluir('+curso.id+')" class="secondary-content"><i class="material-icons">clear</i></a><a href="curso.php?id='+curso.id_curso+'" class="secondary-content"><i class="material-icons">create</i></a></div></li>';
              })
              */

              var html = "<table>"
                html += "<thead> <tr> <th>Tipo do Deposito</th> <th>Valor</th> <th>Status</th>  </tr> </thead>" 
                html += "<tbody>"

                $.each(result, function(index,deposito){
                html += '<tr><td>'+deposito.tipo_deposito+'</td><td>'+deposito.valor_deposito+'</td><td>'+deposito.status+'</td> </tr>';
                })


                html += "</tbody>"
                

                html += "</table>"




              //html+= "</ul>";
              $("#depositos").html(html);


            }

          },

          error : function(){
            alert("FAIL");
          }
        })
      }

     // listarDeposito();















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
        
       
        //$('#valorDeposito').maskMoney();


        //Visualizar Deposito
        $('#deposito-go').click(function(event){
              console.log('teste');
              event.preventDefault();
              $('#main').hide();
              $('#deposito').show();  

        });

        //Visualizar Saque
        $('#saque-go').click(function(event){
              console.log('teste');
              event.preventDefault();
              $('#main').hide();
              $('#saque').show();  

        });

      

            //mascara Valor do Saque  
            $("#valorSaque").maskMoney();
    

        //mascara Valor do Deposito  
        $("#valorDeposito").maskMoney();
        $('select').material_select();
    



  
        //cadastrar deposito
        $("#btn-cadastrar").click(function(e){
        //$("#cadastrar-deposito").submit(function(e){
          e.preventDefault();


          var valorDeposito = $('#tipoDeposito').val();
          var bancoDestino = $('#bancoDestino').val();
          var valorDeposito = $('#valorDeposito').val();
          var desc = $('#descricao').val();

          if(valorDeposito == "" || valorDeposito == "" || desc == ""){
              Materialize.toast('Por favor completar os campos nulos.', 5000, 'rounded');
          }else{
              
            $.ajax({
                url : "http://localhost/carteiraBitcoin/controller/cadastrar-deposito.php",
                type : "post",
                data : $("#cadastrar-deposito").serialize(),

                success : function(result){
                  Materialize.toast('deposito cadastrado com sucesso.', 3000, 'rounded');
                    $("label").each(function(){
                        $(this).removeClass("active");
                      });
                    $(".input-field select").val("default");
                    //$("input-field select").val("default");
                    $("#valorDeposito").val("");
                    $("#descricao").val("");
                    listarDeposito(); 
                },

                  error : function(result){
                    alert("FAIL");
                  }
                })
              

          }

          })

        
        //cadastrar saque
        $("#btn-saque-cadastrar").click(function(e){
        //$("#cadastrar-deposito").submit(function(e){
          e.preventDefault();

          /*
          var valorDeposito = $('#tipoDeposito').val();
          var bancoDestino = $('#bancoDestino').val();
          var valorDeposito = $('#valorDeposito').val();
          var desc = $('#descricao').val();

          if(valorDeposito == "" || bancoDestino == "" || valorDeposito == "" || desc == ""){
              Materialize.toast('Por favor completar os campos nulos.', 5000, 'rounded');
          }else{
            */
            console.log($("#cadastrar-saque").serialize());
              
            $.ajax({
                url : "http://localhost/carteiraBitcoin/controller/cadastrar-saque.php",
                type : "post",
                data : $("#cadastrar-saque").serialize(),

                success : function(result){
                  Materialize.toast('deposito cadastrado com sucesso.', 3000, 'rounded');
                    $("label").each(function(){
                        $(this).removeClass("active");
                      });
                    $(".input-field select").val("default");
                    //$("input-field select").val("default");
                    $("#valorDeposito").val("");
                    $("#descricao").val("");
                    listarDeposito(); 
                },

                  error : function(result){
                    alert("FAIL");
                  }
                })
              

          //}

          })












  
    });
  

  
  </script>




  </body>
</html>
