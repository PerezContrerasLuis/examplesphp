$(document).ready(function(){
	 paginar(1);
});


function paginar(pag){

	$.ajax({
		url: 'usuarios.php',
		type: 'POST',
		datatype:'json',
		data:{"pag":pag},
		success:function(data){
			$("#listapersonas").html(data);
		}
	});
}