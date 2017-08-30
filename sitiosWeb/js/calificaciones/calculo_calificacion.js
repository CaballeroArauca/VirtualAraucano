function Calcular(){	
	var Expresion, Escenario, calificacion_4;
	calificacion_1 = (document.getElementById("calificacion_1").value);
	calificacion_2 = (document.getElementById("calificacion_2").value);
	calificacion_3 = (document.getElementById("calificacion_3").value);
	calificacion_4 = (document.getElementById("calificacion_4").value);
	if ($.trim(calificacion_1).length > 0) {
		calificacion_1 = parseInt(calificacion_1) * 0.25;
	}else{
		calificacion_1 = 0;
	}
	if ($.trim(calificacion_2).length > 0) {
		calificacion_2 = parseInt(calificacion_2) * 0.25;
	}else{
		calificacion_2 = 0;
	}
	if ($.trim(calificacion_3).length > 0) {
		calificacion_3 = parseInt(calificacion_3) * 0.25;
	}else{
		calificacion_3 = 0;
	}
	if ($.trim(calificacion_4).length > 0) {
		calificacion_4 = parseInt(calificacion_4) * 0.25;
	}else{
		calificacion_4 = 0;
	}
	puntaje = calificacion_1 + calificacion_2 + calificacion_3 + calificacion_4;
	document.getElementById("total").innerHTML= puntaje.toFixed(1);
}