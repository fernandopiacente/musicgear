<section class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">

				<div class="col-md-8 col-md-offset-2">
					<h4 class="brand-heading">MUSIC GEAR</h4>
					<div class="col-md-12">
						<div class="col-md-12">
							<h3 for="escolha">Digite um sentimento</h3>
						</div>
						<form method="post" action="<?php echo base_url()."ouvir"; ?>">
							<div class="col-md-12">
								<div class="col-md-6">
									<input placeholder="Alegria, Tristeza, Medo" id="escolher-gear" 
									class="form-control" name="gear" autofocus>
									<br />
									<br />
								</div>
								<div class="col-md-4">
									<select name="estilo" class="form-control">
										<option value="" selected>Escolha</option>
										<?php foreach ($estilos as $estilo) { 
											echo get_option($estilo->id, $estilo->nome);
										} ?>
									</select>
									<br />
								</div>
								<div class="col-md-2">
									<button class="btn btn-default" type="submit">
										GEAR
										<span class="glyphicon glyphicon-play"></span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<style type="text/css">
#escolher-gear{
	font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
	display: block !important;
	width: 300px !important;
	height: 34px !important;
	padding: 6px 12px !important;
	vertical-align: middle !important;
	background-color: #fff !important;
	background-image: none !important;
	border: 1px solid #ccc !important;
	border-radius: none !important;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075) !important;
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075) !important;
	-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
}

.typeahead-devs, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 4px;
	width: 100%;
}

.tt-dropdown-menu {
	width: 300px;
	margin-top: 5px;
	background-color: #fff;
	border-radius: 4px;
	font-size: 13px;
	color: #111;
	border: solid 1px #28c3ab;
	color: #28c3ab;
	background-color: #000;
	font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
}

.tt-suggestion{
	padding-left: 10px;
	vertical-align: middle;
}
.tt-suggestion p{
	height: 40px;
	font-size: 14px;
	margin: 0 !important;
	padding: 0 !important;
	text-align: left;
	line-height: 40px;
}

.tt-suggestion:hover{
	background-color: #28c3ab;
	color: #fff;
}
</style>