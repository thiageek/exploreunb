<div class="container">
	<form name='form_cardapio' method="POST" action="<?php echo base_url()?>index.php/cardapio/salvar">
		<fieldset>
			<legend>
				<?=ucfirst($op)?> Cardápio
			</legend>
			<input name="id" type="hidden" value="2"/>
			<input name="op" type="hidden" value="<?=$op?>"/>
			<label>Semana:</label>
			<input name="semana" type="text"/>
			<label>Endereço:</label>
			<input name="endereco" type="text"/>
			<label>Lanchonete:</label>
			<select name="lanchonete">
				<option value="1">Lanchonete 1</option>
				<option value="2">Lanchonete 2</option>
				<option value="3">Lanchonete 3</option>
			</select>
			<div class="controls">
				<button type="submit" class="btn">
					Cadastrar
				</button>
			</div>
		</fieldset>
	</form>
</div>