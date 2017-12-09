<?php  

	
	class Saque{

        private $id;
		private $contaBancaria;
		private $valorSaque;
        private $descricao;
		private $data;
		

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
        
       
		//data
		public function setData($data){
			$this->data = $data;
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
		
		public function getData(){
			return $this->data;
		}

        
	}


?>