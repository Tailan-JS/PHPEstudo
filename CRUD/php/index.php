<?php
require_once "objetos/conect.php";
require_once "objetos/tarefa.php";
$tarefas = new Tarefa;
$link = new Connect;
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Simples</title>
	<meta charset="UTF-8">
	    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<h2 class="center">CRUD Simples</h2>
<table class="container highlight">
	<thead class="center">
		<th>id</th>
		<th>nome</th>
		<th>Horario</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>

		<td></td>
		<td width="50%">Atividade Teste</td>
		<td width="15%">08:00</td>
		<td width="7%"><button class="btn-floating orange"><i class="material-icons" >edit</i></button> </td>
		<td width="7%"><button class="btn-floating red"><i class="material-icons">delete</i></button></td>
	</tbody>
</table>


<div class="center modal-trigger" href="#modal1" style="margin-top: 4vh;" > <button class="btn">Adicionar Item</button> </div>
 <!-- Modal Structure -->
  <div id="modal1" class="modal" style="height: 80vh;">
    <div class="modal-content">
      <fieldset  style="border-radius: 7px;"><legend class="center"><h4>Novo Produto</h4></legend>
      <form method="POST" action="acoesPHP/acoes.php">
      	<div class="row">
      	<div class="input-field col l8 m12 s12">
      		<label for="nome">Nome</label>
      	<input type="text" name="nome" id="nome">
      </div>
      <div class="input-field col l3">
      	<label for="time">Horario</label>
      	<input type="text" class="timepicker" name="time" id="time">
      </div>
  </div>
  <div class="row">
  <div class="input-field col l11">
  	<textarea class="materialize-textarea" name="desc" id="descricao"></textarea>
  	<label for="desc">Descrição</label>
  </div>
</div>
      <div class="center">
      <button class="btn green modal-close" name="add" style="margin-right: 1vw;">Adicionar</button>
      <button class="btn red modal-close">cancelar</button>
    </div>

      </form>
  </fieldset>
    </div>
    <div class="modal-footer center">
    </div>
  </div>


<script type="text/javascript" src="../JS/acoes.js"></script>
 <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>