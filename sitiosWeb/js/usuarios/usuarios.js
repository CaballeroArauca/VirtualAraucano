$(document).ready(function() {

	var mj_campoVacio = "Completa este campo";
	var span = $('<span></span>');
	var alerta = "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Alerta!</strong><p id='alerta'></p></div>";

	$('#entrar').click(function() {

		var usuario = $('[name=usuario]').val();
		var password = $('[name=password]').val();

		if ($.trim(usuario).length == 0) {
	    	span.insertAfter('[name=usuario]');
	      	span.text(mj_campoVacio).addClass("campoVacio");

	    }else if ($.trim(password).length == 0) {
	      	$(".campoVacio").remove();
	      	span.insertAfter('[name=password]');
	      	span.text(mj_campoVacio).addClass("campoVacio");
	    }else {
	      	$(".campoVacio").remove();
	      	validarUsuario();
	    }

	    function validarUsuario() {
			$.ajax({
				url:"../../modelos/usuarios/usuarios.php?peticion=validarUsuario",
				method:"POST",
				data:{
					usuario:usuario,
					password:password
				},
				success:function(data) {
					if (data.trim() == "exito") {
						$(location).attr('href','index.php');
					}else{
						$("#alert").html(alerta);
				        $("#alerta").html("El usuario o Contraseña son incorrectas");
					}
				}
			});
		}
	});
});
