<?php 
	class Usuario{
		//private $id;
		private $login;
		private $email;
		private $senha;
		private $habilidade;
		private $energia;
		private $sorte;
		private $magia;
		private $ouro;

		/*public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}*/

		public function getLogin(){
			return $this->login;
		}

		public function setLogin($login){
			$this->login = $login;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getHabilidade(){
			return $this->habilidade;
		}

		public function setHabilidade($habilidade){
			$this->habilidade = $habilidade;
		}

		public function getEnergia(){
			return $this->energia;
		}

		public function setEnergia($energia){
			$this->energia = $energia;
		}

		public function getSorte(){
			return $this->sorte;
		}

		public function setSorte($sorte){
			$this->sorte = $sorte;
		}

		public function getMagia(){
			return $this->magia;
		}

		public function setMagia($magia){
			$this->magia = $magia;
		}

		public function getOuro(){
			return $this->ouro;
		}

		public function setOuro($ouro){
			$this->ouro = $ouro;
		}


	}
 ?>	