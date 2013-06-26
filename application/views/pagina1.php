<div class="row-fluid" id="home_screen">
	<div class="span4" id='side_home' style="background-image: url('<?php echo base_url('assets/img/background_home.png') ?>')">
		<div id="head_menu" style="background-image: url('<?php echo base_url('assets/img/botao_logar.png') ?>')">
			<a href="#modal_login" id="link_logar" data-toggle="modal">ENTRAR</a>
			<!--<a href="<?php echo base_url() . 'usario/novo'; ?>" id="link_logar">ENTRAR</a>-->
		</div>
		<h1>O QUE VOCÊ <span>PROCURA</span> ?</h1>
		<div id="div_form_busca">
			<form id="form_busca">
				<input type="text" name="busca" id="campo_busca" placeholder="Salas, Onibus, Lanchonetes ..." style="background-image: url('<?php echo base_url('assets/img/barra_pesquisa.jpg') ?>')"/>
				<input type="hidden" name="opcao" value="tudo" />
				<a href="" id="botao_pesquisar"><img src="<?php echo base_url('assets/img/botao_pesquisar.png') ?>" /></a>
			</form>
		</div>
		<div id="div_botoes_home">
			<center>
				<a href="sala" id="botao_home_sala" title= "Sala"> <img src="<?php echo base_url('assets/img/botao_livro.png') ?>"> </a>
				<a href="onibus" id="botao_home_onibus" title= "Linha de õnibos"> <img src="<?php echo base_url('assets/img/botao_onibus.png') ?>"> </a>
				<a href="lanchonete" id="botao_home_lanchonete" title="Lanchonete"> <img src="<?php echo base_url('assets/img/botao_bolo.png') ?>"> </a>
				<img src="<?php echo base_url('assets/img/bottom_line_opcoes.png') ?>">
			</center>
		</div>
	</div>
	<div class="span8" id="map-canvas"></div>
</div>
<div class="row-fluid" id="destaques_screen">
	<a href="#destaque1" id="botao_content"><img src="<?php echo base_url('assets/img/botao_content.png') ?>"></a>
	<div class="span8" id="destaques_group">
		<h1>LANCHONETES EM DESTAQUE</h1>
		<div class="row-fluid" id="destaque1">
			<div class="span4" id="title_destaque1">
				<p>
					LANCHONETE MEGABOGA 1
				</p>
			</div>
			<div class="span8" id="img_destaque1" style="background-image: url('<?php echo base_url('assets/img/destaque1.jpg') ?>')"></div>
		</div>
		
		<div class="row-fluid destaques" id="destaque2">
			<div class="span8" id="img_destaque2" style="background-image: url('<?php echo base_url('assets/img/destaque2.jpg') ?>')"></div>
			<div class="span4" id="title_destaque3">
				<p>
					LANCHONETE MEGABOGA 2
				</p>
			</div>
		</div>
		<div class="row-fluid destaques" id="destaque3">
			<div class="span4" id="title_destaque3">
				<p>
					LANCHONETE MEGABOGA 3
				</p>
			</div>
			<div class="span8" id="img_destaque3" style="background-image: url('<?php echo base_url('assets/img/destaque3.jpg') ?>')"></div>
		</div>
	</div>
</div>
<div class="row-fluid" id="rodape">
	<div class="span12">
		<div style="float: left; margin-left: 12%;">
			<b>Siga ExploreUnB no
			<button class="btn btn-normal" type="button">
				Twitter
			</button></b>
		</div>
		<div style="float: right; margin-right: 12%;">
			<iframe src="http://www.facebook.com/plugins/like.php?href=LINK&layout=standard&<br>
			show_faces=false&width=380&action=like&colorscheme=light&height=25&locale=pt_BR" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:25px; float: right;" allowTransparency="true"></iframe>
		</div>
		<div id="line_rodape">
			<img src="<?php echo base_url('assets/img/line_rodape.png') ?>"/>
		</div>
	</div>
</div>
<div id="bottom_rodape">
	<center>
		ExploreUnB <i>All rights reserved</i>.
	</center>
</div>

<!-- Modal -->
<div id="modal_login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			×
		</button>
		<h3 id="myModalLabel">Entrar</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
			<div class="span4">
				<form name='form_logar' method="POST" action="<?php echo base_url()?>usuario/logar">
					<legend>
						Login
					</legend>
					  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Senha</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Senha">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Lembrar-me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
				</form>
			</div>
			<div class="span8">
				<form name='form_cadastrar' method="POST" action="<?php echo base_url()?>usuario/salvar">
					<legend>
						Cadastrar
					</legend>
					<fieldset class="span4">
						<input name="op" type="hidden" value="salvar"/>
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
					</fieldset>
					<fieldset class="span4">
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
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			Close
		</button>
		<button class="btn btn-primary">
			Save changes
		</button>
	</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var map;
		var MY_MAPTYPE_ID = 'custom_style';
		function initialize() {

			var featureOpts = [{
				featureType : 'poi.school',
				elementType : 'all',
				stylers : [{
					hue : '#009200'
				}, {
					saturation : 100
				}, {
					lightness : -66
				}, {
					visibility : 'on'
				}]
			}, {
				featureType : 'landscape',
				elementType : 'all',
				stylers : [{
					hue : '#001fce'
				}, {
					saturation : 100
				}, {
					lightness : -55
				}, {
					visibility : 'on'
				}]
			}, {
				featureType : 'road',
				elementType : 'all',
				stylers : [{
					hue : '#ffffff'
				}, {
					saturation : -100
				}, {
					lightness : 100
				}, {
					visibility : 'simplified'
				}, {
					weight : 0.5
				}]
			}, {
				featureType : 'poi.business',
				elementType : 'all',
				stylers : [{
					hue : '#001fce'
				}, {
					saturation : 100
				}, {
					lightness : -52
				}, {
					visibility : 'off'
				}]
			}];

			var mapOptions = {
				zoom : 15,
				center : new google.maps.LatLng(-15.763, -47.865066),
				disableDefaultUI : true,
				mapTypeControlOptions : {
					mapTypeIds : [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
				},
				mapTypeId : MY_MAPTYPE_ID
			};
			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			var styledMapOptions = {
				name : 'Custom Style'
			};

			var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

			map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		}


		google.maps.event.addDomListener(window, 'load', initialize);
	}); 
</script>