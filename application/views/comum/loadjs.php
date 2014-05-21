<div id="map"></div>

<!-- Core JavaScript Files -->
<script src="<?php echo JS; ?>app/bootstrap.min.js"></script>
<script src="<?php echo JS; ?>app/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo JS; ?>grayscale.js"></script>


<?php $atual = get_url_atual(); $atual = $atual[2]; ?>
<?php switch ($atual) {
	case 'ouvir': ?>
	<script src="<?php echo JS; ?>app/plugins/typeahead.js"></script>
	<script src="<?php echo JS; ?>app/ouvir.js"></script>
	<?php break; ?>

	<?php case 'index': ?>
	<script src="<?php echo JS; ?>app/plugins/typeahead.js"></script>
	<script src="<?php echo JS; ?>app/ouvir.js"></script>
	<?php break; ?>

	<?php case '': ?>
	<script src="<?php echo JS; ?>app/plugins/jquery.validate.js"></script>
	<script src="<?php echo JS; ?>app/app.js"></script>
	<?php break; ?>


	<?php default: return; break;
} ?>
