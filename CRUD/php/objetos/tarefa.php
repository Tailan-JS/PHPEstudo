<?php
require_once "conect.php";
$con = new Connect;
$link = $con->link();

class Tarefa{
  private $nome,$descricao,$hora;


  public function add($nome,$descricao,$hora){
  	global $link;
  	$this->hora = $hora;
  	$this->nome = $nome;
  	$this->descricao = $descricao;

  	$sql = "INSERT INTO tarefas(nome,descricao,hora) VALUES(:nome,:descricao,:hora)";
  	$stmt = $link->prepare($sql);

  	$stmt->bindValue(':nome',$this->nome);
  	$stmt->bindValue(':descricao',$this->descricao);
  	$stmt->bindValue(':hora',$this->hora);

  	if($stmt->execute())
  		header('location:../index.php');
  	else
  		echo "Erro ao adicionar os dados";
  }

  public function read(){
  	global $link;
  	$sql = "SELECT * FROM tarefas";
  	$stmt = $link->prepare($sql);
  	$stmt->execute();
  	$list = $stmt->fetchAll();

  	return $list;
  }

  public function update($nome,$desc,$hora,$id){
  	global $link;
  	$this->nome = $nome;
  	$this->descricao = $desc;
  	$this->hora = $hora;

  	$sql = "UPDATE tarefas SET nome = :nome, descricao = :descricao, hora = :hora WHERE id = :id";
  	$stmt = $link->prepare($sql);
  	$stmt->bindValue(':nome',$this->nome);
  	$stmt->bindValue(':descricao',$this->descricao);
  	$stmt->bindValue(':hora',$this->hora);
  	$stmt->bindValue(':id',$id);
  	$stmt->execute();
  	header('location:../index.php');

  }

  public function remove($id){
  	global $link;
  	$sql ="DELETE FROM tarefas WHERE id = :id";
  	$stmt = $link->prepare($sql);
  	$stmt->bindValue(':id',$id);
  	try {
  		$stmt->execute();
  		header("location:../index.php");
  		
  	} catch (PDOException $e) {
  		echo "error:".$e->getMessage();
  	}
  	
  	//header("location:../index.php");

  }

}


?>