<?php  

	
	class Deposito{

        private $id;
		private $contaBancaria;
		private $valorSaque;
        private $descricao;
        

        //id
        public function setId($id){
			$this->id = $id;
		}

        //conta bancaria
		public function setContaBancaria($contaBancaria){
			$this->contaBancaria = $contaBancaria;
		}

        //valor de saque
		public function setValorSaque($valorSaque){
			$this->valorSaque = $valorSaque;
		}

        //descricao
        public function setDescricao($descricao){
			$this->descricao = $descricao;
        }
        
       


		public function getId(){
			return $this->id;
		}

        public function getContaBancaria(){
			return $this->contaBancaria;
		}

        public function getValorSaque(){
			return $this->valorSaque;
		}

        public function getDescricao(){
			return $this->descricao;
        }
        
        
	}


?>