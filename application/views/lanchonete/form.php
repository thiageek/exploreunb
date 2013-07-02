<div class="container">
	<form name='form_lanchonete' method="POST" action="<?php echo base_url()?>lanchonete/salvar">
		<fieldset>
			<legend>
				<?php echo $op ?> Lanchonete
			</legend>
			<input name="id" type="hidden" value="2"/>
			<input name="op" type="hidden" value="<?php echo $op?>"/>
			<label>Nome:</label>
			<input name="lanchonete" type="text"/>
			<label>Local:</label>
			<select name="local">
				<option value="1">Local 1</option>
				<option value="2">Local 2</option>
				<option value="3">Local 3</option>
			</select>
			<label>Coordenada</label>
			<select name="coordenada">
				<option value="1">Ponto x, Ponto y</option>
				<option value="2">Ponto x, Ponto y</option>
				<option value="3">Ponto x, Ponto y</option>
			</select>
			<div class="controls">
				<button type="submit" class="btn">
					Cadastrar
				</button>
			</div>
		</fieldset>
	</form>
</div>