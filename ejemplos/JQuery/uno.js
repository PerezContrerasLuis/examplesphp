$(document).ready(function (){

	$("#uno").click(function(){
		$("#uno").css("color","red");
	});

	$("#mostrar").click(function(){
		$("#uno").css("color","red");
		$("#uno").css("font-size","150px");
		$("#uno").css("background","yellow");

		$("#dos").css("color","red");
		$("#dos").css("font-size","150px");
		$("#dos").css("size","10px");
		$("#dos").css("background","yellow");
	});

	$("#demo").change(function(){
		alert("cambio");
	});
});