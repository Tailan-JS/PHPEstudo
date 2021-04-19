<?php
require_once "../objetos/tarefa.php";
$tarefa = new Tarefa;

if(isset($_POST['add'])){
	global $tarefa;
	$tarefa->add($_POST['nome'],$_POST['desc'],$_POST['time'] );
	echo "nome: ".$_POST['nome']." descricao:".$_POST['desc']."hora :".$_POST['time'];
}

if(isset($_POST['edit'])){
	global $tarefa;
	$tarefa->update($_POST['nome'],$_POST['desc'],$_POST['time'],$_POST['id']);
}
if(isset($_POST['delete'])){
	global $tarefa;
	$tarefa->remove($_POST['id']);
	echo "testando 1 2 3...".$_POST['id'];
}
?>