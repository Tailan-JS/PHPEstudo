<?php
require_once "objetos/tarefa.php";
$tarefas = new Tarefa;
$list = $tarefas->read();
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
    <?php  
    foreach ($list as $value) {
    ?>
    <tr class="linha" onmouseover="show(this.nextElementSibling)" onmouseout="hide(this.nextElementSibling)">
		<td><?php echo $value['id'] ?></td>
		<td width="50%"><?php echo $value['nome']; ?></td>
		<td width="15%"><?php echo $value['hora']; ?></td>
		<td width="7%"><button class="btn-floating orange modal-trigger" href="#modal?id=<?php echo($value['id']) ?>"><i class="material-icons" >edit</i></button> </td>

                                  <!-- Modal Structure -->
  <div id="modal?id=<?php echo($value['id']) ?>" class="modal" style="height: 80vh;">
    <div class="modal-content">
      <fieldset  style="border-radius: 7px;"><legend class="center"><h4>Editar dados</h4></legend>
      <form method="POST" action="acoesPHP/acoes.php">
        <div class="row">
          <div class="input-field" >
            <input type="hidden" name="id" value="<?php echo($value['id']) ?>">
          </div>
        <div class="input-field col l8 m12 s12">
          <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $value['nome']?>">
      </div>
      <div class="input-field col l3 m12 s12">
        <label for="time">Horario</label>
        <input type="text" class="timepicker" name="time" id="time" value="<?php echo $value['hora']?>">
      </div>
  </div>
  <div class="row">
  <div class="input-field col l11 m12 s12 ">
    <textarea class="materialize-textarea" name="desc" id="descricao">
      <?php echo $value['descricao']?>
    </textarea>
    <label for="desc">Descrição</label>
  </div>
</div>
      <div class="center">
      <button class="btn orange modal-close" name="edit" style="margin-right: 1vw;">Editar</button>
      <button class="btn red modal-close" type="reset">cancelar</button>
    </div>

      </form>
  </fieldset>
    </div>
  </div>
                                          <!---  fim do modal --->
		<td width="7%"><button class="btn-floating red modal-trigger" href="#confirm?id=<?php echo($value['id']) ?>"><i class="material-icons">delete</i></button></td>
                                          <!--- modal de delete --->
    <div class="modal" id="confirm?id=<?php echo($value['id']) ?>">
      <div class="modal-content">
        <fieldset style="border-radius: 20px;">
        <form method="POST" action="acoesPHP/acoes.php" >
          <p class="center" style="font-size: 1.5em">Deseja realmente excluir este item??</p>
          <input type="hidden" value="<?php echo($value['id']) ?>" name="id" >
        <div class="center">
          <button class="modal-close btn green" type="submit" name="delete">Confirmar</button>
          <button class="modal-close btn red" type="reset">Fechar</button>
        </div>
        </form>
        </fieldset>
      </div>
    </div>
                                    <!--- fim do modal de delete --->
    </tr>
    <tr style="display: none;"><td colspan="5" class="center"><?php echo($value['descricao']) ?></td></tr>
  <?php }?>
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
      <div class="input-field col l3 m12 s12">
      	<label for="time">Horario</label>
      	<input type="text" class="timepicker" name="time" id="time">
      </div>
  </div>
  <div class="row">
  <div class="input-field col l11 m12 s12">
  	<textarea class="materialize-textarea" name="desc" id="descricao"></textarea>
  	<label for="desc">Descrição</label>
  </div>
</div>
      <div class="center">
      <button class="btn green modal-close" name="add" style="margin-right: 1vw;">Adicionar</button>
      <button class="btn red modal-close" type="reset">cancelar</button>
    </div>

      </form>
  </fieldset>
    </div>
  </div>


<script type="text/javascript" src="../JS/acoes.js"></script>
 <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>