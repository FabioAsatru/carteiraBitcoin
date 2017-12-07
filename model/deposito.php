<?php  

	
	class Deposito{

        private $id;
		private $tipoDeposito;
		private $bancoDestino;
        private $valorDeposito;
        private $descricao;
        private $status;
        private $data;

        public function setId($id){
			$this->id = $id;
		}

		public function setTipoDeposito($tipoDeposito){
			$this->tipoDeposito = $tipoDeposito;
		}

		public function setBancoDestino($bancoDestino){
			$this->bancoDestino = $bancoDestino;
		}

		public function setValorDeposito($valorDeposito){
			$this->valorDeposito = $valorDeposito;
        }
        
        public function setDescricao($descricao){
			$this->descricao = $descricao;
        }
        
        
        public function setStatus($status){
			$this->status = $status;
        }
        

        
        public function setData($data){
			$this->data = $data;
        }



		public function getId(){
			return $this->id;
		}

        public function getTipoDeposito(){
			return $this->tipoDeposito;
		}

        public function getBancoDestino(){
			return $this->bancoDestino;
		}

        public function getValorDeposito(){
			return $this->valorDeposito;
        }
        
        public function getDescricao(){
			return $this->descricao;
        }
            
        public function getStatus(){
			return $this->status;
        }
          
        public function getData(){
            return $this->data;
        }

	}


?>