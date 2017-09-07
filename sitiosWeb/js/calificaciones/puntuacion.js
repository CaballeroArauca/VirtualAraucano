$(function() {

	get_Lista();
	setInterval(carga, 10000);

	function carga(){
		get_Lista();
	}

	function get_Lista() {
		$.ajax({
			url:"../../modelos/participantes/participantes.php?peticion=get_Lista",
			success:function(data) {
				$('#lista').html(data);
				get_Img();
			}
		});
	}

	function get_Img() {
		$.ajax({
			url:"../../modelos/participantes/participantes.php?peticion=get_Img",
			success:function(data) {
				$('#img').html(data);
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