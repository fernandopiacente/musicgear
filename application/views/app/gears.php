<section id="main-content" class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><br /></h1>
					<div class="col-md-12">
						<div class="col-md-12">							
							<?php foreach ($conteudo as $video) { print_r($video); ?>
							<div class="col-md-12">
								<div class="col-md-4" id="video_<?php echo 1; ?>">
								</div>								
							</div>
							<?php } die();?>
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
	return = '<div class="col-md-4" id="video_'+id+'">'+video+'</div>';
}
$(function(){
	$("#ver_mais").on("click", function(){
		showloading();
		$.post(get_posts, {ultima: id_last}).done(function(mais){
			total_geral = total_geral - 8;
			console.log("TOTAL: "+total_geral);
			if(total_geral <= 0){
				hide_loading();
				$("#vermais").attr("disabled", true); 
			}

			if(mais == 0){
				hide_loading();
				$("#vermais").attr("disabled", true); 
				return;
			}

			mais = $.parseJSON(mais);

			$.each(mais, function(i, item) {
				var nova = get_template(item.id, item.imagem, item.titulo, item.autor);
				$("#pre-artes").append(nova);
			});

			hideloading();
		});
	});
});
</script>