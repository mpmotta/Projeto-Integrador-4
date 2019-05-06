 <?php
	Class conectar{
		public $server = "localhost";
		public $username = "root";
		public $password = "";
		public $banco = "churrasco";
		
		public $conn;
		public $erro;
		
		public function __construct(){
			$this->conexao();
		}
		
		private function conexao(){
		
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->banco);

		if (!$this->conn) {
			$this->erro ="Erro na conexao!".$this->conn->connect_error;
			return false;
			}
		}		
		
			 
		// consulta de dados
		public function consulta($sql){
			$result = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}else{
				return false;
			}
		}
		
		//cadastrar produtos
		public function cadastrar($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(inserir_linha){
				header("Location: gerenciar_produtos.php?msg=Dados cadastrados com sucesso!");
				$conn->close();
				exit();
			}else{
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);	
			}
		}

		//cadastrar usuários
		public function cadastrarUser($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(inserir_linha){
				header("Location: ../Views/gerenciar_usuarios.php?msg=Usuário cadastrado com sucesso!");
				$conn->close();
				exit();
			}else{
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);	
			}
		}
		
		//funcao atualizar produtos
		public function atualizar($sql){
			$update_row = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(update_row){
				header("Location: ../Views/gerenciar_produtos.php?msg=Dados atualizados com sucesso!");
				exit();
			}else{
				die("Erro ao atualizar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		//funcao atualizar usuarios
		public function atualizarUser($sql){
			$update_row = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if(update_row){
				header("Location: ../Views/gerenciar_usuarios.php?msg=Dados atualizados com sucesso!");
				exit();
			}else{
				die("Erro ao atualizar:(".$this->conn->errno.")".$this->conn->error);
			}
		}


		//funcao apagar produtos
		public function apagar($sql){
			$apagar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);	
			if(apagar_linha){
					header("Location: ../Views/gerenciar_produtos.php?msg=Dados apagados com sucesso"); 
			}else{
				die("Erro ao apagar:(".$this->conn->errno.")".$this->conn->error);
			}		
		}

		//funcao apagar usuários
		public function apagarUser($sql){
			$apagar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);	
			if(apagar_linha){
					header("Location: ../Views/gerenciar_usuarios.php?msg=Usuário apagado com sucesso"); 
			}else{
				die("Erro ao apagar:(".$this->conn->errno.")".$this->conn->error);
			}		
		}
		
		//função de logon de usuário
	   public function logar($sql){
		 $usuario = $_POST['usuario'];
		 $login = $this->conn->query($sql) or die($this->conn->error.__LINE__);
		if(mysqli_num_rows($login)!=1){
			echo "<p id='erro'>Login inválido!</p>";
		}else{
			session_start();
			$_SESSION['validacao']=1;
			$_SESSION['usuario'] = $usuario;
			header("Location: logado.php");
			}	
		}
		
		//funcao deslogar
		function deslogar(){
			session_start();
			session_name('logado');
			unset($_SESSION['validacao']);
			unset($_SESSION['usuario']);
			session_destroy();
			header("Location: ../Views/index.php?msg=Usuário Deslogado!");
		}	
	
} //fim da classe conexao
	
	
	
	
	