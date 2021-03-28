<?php
	class Plano_Aula
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

		public function cadastrar($nome, $descricao, $serie, $conteudo, $tempoDuracao, $objetivos, $desenvolvimento, $materiais, $autor, $contato, $jogo_id, $disciplina_id, $tema_transversal_id)
		{
			global $pdo;
			$sql = $pdo->prepare("SELECT id FROM planos_aula WHERE nome = :n");
			$sql->bindValue(":n", $nome);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				return false;
			}
			else
			{
				$sql = $pdo->prepare("INSERT INTO planos_aula (nome, descricao, serie, conteudo, tempoDuracao, objetivos, desenvolvimento, materiais, autor, contato, jogos_id, disciplinas_id, temas_transversais_id) 
                                      VALUES (:n, :d, :s, :c, :t, :o, :dev, :m, :a, :ctt, :j, :disc, :tt)");
				$sql->bindValue(":n", $nome);
                $sql->bindValue(":d", $descricao);
                $sql->bindValue(":s", $serie);
                $sql->bindValue(":c", $conteudo);
                $sql->bindValue(":t", $tempoDuracao);
                $sql->bindValue(":o", $objetivos);
                $sql->bindValue(":dev", $desenvolvimento);
                $sql->bindValue(":m", $materiais);
                $sql->bindValue(":a", $autor);
                $sql->bindValue(":ctt", $contato);
				$sql->bindValue(":j", $jogo_id);
                $sql->bindValue(":disc", $disciplina_id);
                $sql->bindValue(":tt", $tema_transversal_id);


				$sql->execute();
				return true;			
			}
		}
		public function cadastrar2($jogos_id, $disciplinas_id){

			global $pdo2;

			$sql2 = $pdo2->prepare("SELECT * FROM jogos_has_disciplinas");
			$sql2->execute();

			if($sql2->rowCount() > 0)
			{
				return false;
			}
			else
			{

				$sql2 = $pdo2->prepare("INSERT INTO jogos_has_disciplinas (jogos_id, disciplinas_id) VALUES(:jid, :did)");
				$sql2->bindVale(":jid", $jogos_id);
				$sql2->bindVale(":dis", $disciplinas_id);

				$sql2->execute();
				return true;	
		}


	}
}
?>