<?php  

	class SaqueDao{

		private $connection;

		function __construct($connection){
			$this->connection = $connection;
		}


       // INSERT INTO `wallet`.`saque` (`conta_bancaria`, `valor_saque`, `descricao`) VALUES ('122333', '123333', 'gsgsgs');

		public function cadastrar(Saque $saque){
			$query = "INSERT INTO 
                deposito(
                         conta_bancaria
                        ,valor_saque
                        ,descricao
                        )
                 VALUES(
                         '{$saque->getContaBancaria()}'
                        ,'{$deposito->getValorSaque()}'
                        ,'{$deposito->getDescricao()}'
                        
                         );";

			return mysqli_query($this->connection,$query);
		}

		public function listar(){

			$depositos = array();

			$query = "SELECT * FROM saque";

			$result = mysqli_query($this->connection,$query);

			while($saque_array = mysqli_fetch_assoc($result)){
				array_push($saques, $saque_array);
			}

			return $saques;

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