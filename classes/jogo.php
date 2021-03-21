<?php
	class Jogo
	{
		private $pdo;
		public $msgErro = "";
		public function conectar($nome, $host, $usuario, $senha)
		{
			global $pdo;
			global $msgErro;
			try
			{
				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
			} catch(PDOException $e) {
				$msgErro = $e->getMessage();
			}

		}

		public function cadastrar($nome, $descricao, $video)
		{
			global $pdo;
			$sql = $pdo->prepare("SELECT id FROM jogos WHERE nome = :n");
			$sql->bindValue(":n", $nome);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				return false;
			}
			else
			{
				$sql = $pdo->prepare("INSERT INTO jogos (nome, descricao, video) VALUES (:n, :d, :v)");
				$sql->bindValue(":n", $nome);
                $sql->bindValue(":d", $descricao);
                $sql->bindValue(":v", $video);
				
				$sql->execute();
				return true;			
			}
		}
	}
?>