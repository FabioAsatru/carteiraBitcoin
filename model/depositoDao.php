<?php  

	class DepositoDao{

		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}


		public function cadastrar(Deposito $deposito){
			$query = "INSERT INTO 
                deposito(
                         tipo_deposito
                        ,banco_destino
                        ,valor_deposito
                        ,descricao
                        ,status
                        ,data
                        )
                 VALUES(
                         '{$deposito->getTipoDeposito()}'
                        ,'{$deposito->getBancoDestino()}'
                        ,'{$deposito->getValorDeposito()}'
                        ,'{$deposito->getDescricao()}'
                        ,'{$deposito->getStatus()}'
                        ,'{$deposito->getData()}'
                        
                         );";

			return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$depositos = array();

			$query = "SELECT * FROM deposito";

			$result = mysqli_query($this->connection,$query);

			while($deposito_array = mysqli_fetch_assoc($result)){
				array_push($depositos, $deposito_array);
			}

			return $depositos;

		}
        /*
		public function excluir($id){
			$query = "DELETE FROM deposito WHERE id_deposito = '{$id}' ";

			return mysqli_query($this->connection,$query);
		}


		public function selecionar($id_deposito){
			$query = "SELECT * FROM deposito WHERE id_deposito = '{$id_deposito}' ";

			$result = mysqli_query($this->connection,$query);

			return mysqli_fetch_assoc($result);

		}

		public function editar(Deposito $deposito){
			$query = "UPDATE deposito SET nome= '{$deposito->getNome()}' WHERE id_deposito = '{$deposito->getId()}' ";

			return mysqli_query($this->connection,$query);
		}
		*/
		
	}

?>