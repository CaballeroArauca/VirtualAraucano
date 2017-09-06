function Calcular(){
	var Calificacion_1, Calificacion_2, Calificacion_3, Calificacion_4;
	Calificacion_1 = (document.getElementById("Calificacion_1").value);
	
	Calificacion_2 = (document.getElementById("Calificacion_2").value);
	Calificacion_3 = (document.getElementById("Calificacion_3").value);
	Calificacion_4 = (document.getElementById("Calificacion_4").value);
	if ($.trim(Calificacion_1).length > 0) {
		Calificacion_1 = parseInt(Calificacion_1) * 0.25;
	}else{
		Calificacion_1 = 0;
	}
	if ($.trim(Calificacion_2).length > 0) {
		Calificacion_2 = parseInt(Calificacion_2) * 0.25;
	}else{
		Calificacion_2 = 0;
	}
	if ($.trim(Calificacion_3).length > 0) {
		Calificacion_3 = parseInt(Calificacion_3) * 0.25;
	}else{
		Calificacion_3 = 0;
	}
	if ($.trim(Calificacion_4).length > 0) {
		Calificacion_4 = parseInt(Calificacion_4) * 0.25;
	}else{
		Calificacion_4 = 0;
	}
	puntaje = Calificacion_1 + Calificacion_2 + Calificacion_3 + Calificacion_4;
	document.getElementById("total").innerHTML= puntaje.toFixed(1);
}