<?php
require_once "../objetos/tarefa.php";
$tarefa = new Tarefa;

if(isset($_POST['add'])){
	global $tarefa;
	$tarefa->add($_POST['nome'],$_POST['desc'],$_POST['time'] );
	echo "nome: ".$_POST['nome']." descricao:".$_POST['desc']."hora :".$_POST['time'];
	//echo "\n voce clicou add";
}

?>