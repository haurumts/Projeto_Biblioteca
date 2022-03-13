<h1>Cadastrar Categoria</h1>
<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Livro</label>
		<select name="categoria_id_categoria" class="form-control">
			<option>-= Selecione uma categoria =-</option>
			<?php
				$sql = "SELECT * FROM categoria";
				$res = $conn->query($sql) or die($conn->error);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_categoria."'>";
						print $row->nome_categoria."</option>";
					}
				}else{
					print "<option>Não há categorias cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Categoria</label>
		<input type="text" name="nome_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>