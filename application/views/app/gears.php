<section id="main-content" class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><br /></h1>
					<div class="col-md-12">
						<div class="col-md-12" id="pre-videos">		

							<?php foreach ($conteudo as $nome => $videos) { ?>
							<div class="col-md-12">
								<br />
								<h2><?php echo $nome; ?></h2>	
								<br />
								<?php foreach ($videos as $v) { ?>														
								<div class="col-md-4" id="video_<?php echo $v->id; ?>">
									<?php echo $v->url; ?>
								</div>														
								<?php } ?>
							</div>
							<br />
							<?php } ?>
						</div>
					</div>

					<div class="col-md-12">
						<div id="pre-loading">
							<img id='waiting' src="<?php echo IMG; ?>wait.gif">
						</div>
						<br />
						<button class="btn btn-default" id="ver_mais">Ver <span class="glyphicon glyphicon-plus"></span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
#waiting{
	display: none;
	width: 100px;
}
</style>
<script type="text/javascript">
var base = "<?php echo base_url(); ?>";
function showloading(){$("#waiting").fadeIn();}
function hideloading(){$("#waiting").fadeOut();}

function get_template(id, video){
	return '<div class="col-md-4" id="video_'+id+'">'+video+'</div>';
}
$(function(){
	var since = 7;
	$("#ver_mais").on("click", function(){
		showloading();
		var get_gears = base+"services/get_more";
		var tipo = "<?php echo $tipo; ?>";	

		$.post(get_gears, {
			tipo: tipo,
			since: since
		}).done(function(mais){
			if(mais == "-1"){
				$("#ver_mais").attr("disabled", true);
				hideloading();
				return;
			}

			since += 6;

			mais = $.parseJSON(mais);

			$.each(mais, function(nome, videos) {
				var nova = "<div class='col-md-12'>";
				nova+="<br /><h2>"+nome+"</h2><br />";
				$.each(videos, function(i, video) {
					nova += get_template(video.id, video.url);
				});
				nova +="</div>";
				$("#pre-videos").append(nova);
			});
			hideloading();
		});
	});
});
</script>