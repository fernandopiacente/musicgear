<section id="main-content" class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><span class="glyphicon glyphicon-cog"></span></h1>
					<h4 class="brand-heading"><?php echo $titulo; ?></h4>
					<div class="col-md-12">
						<div class="col-md-12" id="container-videos">
							
							<?php foreach ($videos as $tag) { ?>
							<?php foreach ($tag as $k => $v) { ?>
							<div class="col-md-4">
								<?php echo $v; ?>
								<br />
								<ul class="lista-tags">
									<?php echo get_tag("li", "", $k); ?>
									<button class="plus btn btn-default">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</ul>
								<div class="col-md-6 hide">
									<input class="form-control" placeholder="Nova tag">
								</div>
							</div>
							<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
