<?php
session_start();

class Usuario{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
    
    public function cadastrarUsuario($email, $nome, $senha, $telefone, $cpf){
        $senha = md5($senha);
        
        $sql = "INSERT INTO usuario SET nome_usuario = '$nome', email_usuario = '$email', 
        senha_usuario = '$senha', telefone_usuario = '$telefone', cpf_usuario = '$cpf' ";

		$sql = 	$this->pdo->query($sql);

        $id = $this->pdo->lastInsertId();
        $this->pegaDados($id);

        //header("Location: ../phppaginas/index.php");
    }

// Parte do Usuário 
    
    public function verificaEmailUsuario($email){

        $sql = "SELECT * FROM usuario WHERE email_usuario = :email";

		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
			return true;
		}else{
			return false;
		}
    }

    public function verificaEmailOng($emailOng){

        $sql = "SELECT * FROM instituicao WHERE email_ong = :email";

		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $emailOng);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
			return true;
		}else{
			return false;
		}
    }
    public function fazerLoginOng($emailOng, $senhaOng){

        $senha = md5($senhaOng);

        $sql = "SELECT * FROM instituicao WHERE email_ong = :email and senha_ong = :senha";
        
		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $emailOng);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
           
            //salva os dados do usuario no token
            foreach ($sql->fetchAll() as $ong) { 
        
				$_SESSION['id_ong'] = $ong['id_ong'];
                $_SESSION['instituicao_ong'] = $ong['instituicao_ong'];
                $_SESSION['email_ong'] = $ong['email_ong'];
                $_SESSION['telefone'] = $ong['telefone_ong'];
            
			}
             
		}
    }

    public function fazerLoginUsuario($email, $senha){

        $senha = md5($senha);

        $sql = "SELECT * FROM usuario WHERE email_usuario = :email and senha_usuario = :senha";
        
		$sql = 	$this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

		if ($sql->rowCount() > 0){ 
           
            //salva os dados do usuario no token
            foreach ($sql->fetchAll() as $usuario) { 
				$_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
                $_SESSION['email_usuario'] = $usuario['email_usuario'];
                $_SESSION['telefone'] = $usuario['telefone_usuario'];
			}

		}
    }

    public function pegaDados($id){
        $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
        $sql = 	$this->pdo->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0){ 

			foreach ($sql->fetchAll() as $usuario) { 
				$_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
                $_SESSION['email_usuario'] = $usuario['email_usuario'];
			}
            
		}else{
			return false;
		}
    }

    public function listarDoacoes(){

        $sql = "SELECT * FROM doacoes, usuario where doacoes.id_usuario = usuario.id_usuario";
        $sql = $this->pdo->prepare($sql);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
           
		} 
		return $dados;
    }

}