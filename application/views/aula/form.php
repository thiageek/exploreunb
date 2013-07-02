<div class="container">
	<form name='form_aula' method="POST" action="<?php echo base_url()?>index.php/aula/salvar">
		<fieldset>
			<legend>
				<?=ucfirst($op)?> Aula
			</legend>
			<input name="id" type="hidden" value="2"/>
			<input name="op" type="hidden" value="<?=$op?>"/>
			<label>Dia:</label>
			<input name="dia" type="text"/>
			<label>Hora:</label>
			<input name="hora" type="text"/>
			<label>Sala:</label>
			<input name="sala" type="text"/>
			<label>Turma:</label>
			<select name="turma">
				<option value="1">Turma 1</option>
				<option value="2">Turma 2</option>
				<option value="3">Turma 3</option>
			</select>
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