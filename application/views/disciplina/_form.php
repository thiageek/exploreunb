<div class="container">
	<form name='form_disciplina' method="POST" action="<?php echo base_url()?>disciplina/salvar">
		<fieldset>
			<legend>
				<?php echo $op ?> Disciplina
			</legend>
			<input name="id" type="hidden" value="2"/>
			<input name="op" type="hidden" value="<?php echo $op ?>"/>
			<label>Disciplina:</label>
			<input name="disciplina" type="text"/>
			<label>Codigo:</label>
			<input name="codigo" type="text"/>
			<div class="controls">
				<button type="submit" class="btn">
					Cadastrar
				</button>
			</div>
		</fieldset>
	</form>
</div>