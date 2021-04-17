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
  		echo "Tarefa Adicionada com Sucesso";
  	else
  		echo "Erro ao adicionar os dados";
  }


}


?>