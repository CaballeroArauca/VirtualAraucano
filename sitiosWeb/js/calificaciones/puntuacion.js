$(function() {

	setInterval(carga, 10000);

	function carga(){
		get_Lista();
	}

	function get_Lista() {
		$.ajax({
			url:"../../modelos/participantes/participantes.php?peticion=get_Lista",
			success:function(data) {
				$('#lista').html(data);
				get_Anterior();
			}
		});
	}

	function get_Anterior() {
		$.ajax({
			url:"../../modelos/participantes/participantes.php?peticion=get_Anterior",
			success:function(data) {
				$('#anterior').html(data);
			}
		});
	}

});