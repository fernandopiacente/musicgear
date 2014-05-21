var base = $(".body-all").attr('base');

$(function(){
	var servico = base+'services/get_gear?query=%QUERY';
	$('#escolher-gear').typeahead({
		name: 'gear',
		remote : servico
	});
});