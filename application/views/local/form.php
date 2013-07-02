<div class="container">
	<form name='form_local' method="POST" action="<?php echo base_url()?>index.php/local/salvar">
		<fieldset>
			<legend>
				<?=ucfirst($op)?> Local
			</legend>
			<input name="id" type="hidden" value="2"/>
			<input name="op" type="hidden" value="<?=$op?>"/>
			<label>Nome:</label>
			<input name="local" type="text"/>
			<label>Número:</label>
			<input name="numero" type="text"/>
			<label>Tipo:</label>
			<select name="tipo">
				<option value="1">Sala de aula</option>
				<option value="2">Anfeteatro</option>
				<option value="3">Labotatório</option>
			</select>
			<label>Prédio</label>
			<select name="predio">
				<option value="1">ICC - Instituto de Ciências Exatas</option>
				<option value="2">PJC - Pavilhão João Calmon</option>
				<option value="3">PAT - Pavilhão Anísio Teixeira</option>
			</select>
			<div class="controls">
				<button type="submit" class="btn">
					Cadastrar
				</button>
			</div>
		</fieldset>
	</form>
</div>