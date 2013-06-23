<div class="container">
	<form name='form_usuario' method="POST" action="<?php echo base_url()?>usuario/salvar">
		<fieldset>
			<legend>
				Novo Usuario
			</legend>
			<input name="id" type="hidden"/>
			<label>Nome:</label>
			<input name="nome" type="text"/>
			<label>Matricula:</label>
			<input name="matricula" type="text"/>
			<label>Curso:</label>
			<select name="curso">
				<option value="1">Computação</option>
				<option value="2">Design Industrial</option>
				<option value="3">Matematica</option>
				<option value="4">Artes</option>
			</select>
			<label>Email:</label>
			<input name="email" type="text"/>
			<label>Senha:</label>
			<input name="senha" type="password"/>
			<label>Confirmar Senha:</label>
			<input name="c_senha" type="password"/>
			<div class="controls">
				<button type="submit" class="btn">
					Cadastrar
				</button>
			</div>
		</fieldset>
	</form>
</div>