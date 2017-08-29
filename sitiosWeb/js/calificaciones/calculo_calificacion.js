function Calcular(){	
	var Expresion, Escenario, Afinacion;
	Expresion = (document.getElementById("Expresion").value);
	Escenario = (document.getElementById("Escenario").value);
	Afinacion = (document.getElementById("Afinacion").value);
	if ($.trim(Expresion).length > 0) {
		Expresion = parseInt(Expresion) * 0.2;
	}else{
		Expresion = 0;
	}
	if ($.trim(Escenario).length > 0) {
		Escenario = parseInt(Escenario) * 0.2;
	}else{
		Escenario = 0;
	}
	if ($.trim(Afinacion).length > 0) {
		Afinacion = parseInt(Afinacion) * 0.6;
	}else{
		Afinacion = 0;
	}
	puntaje = Expresion + Escenario + Afinacion;
	document.getElementById("total").innerHTML= puntaje.toFixed(1);
}