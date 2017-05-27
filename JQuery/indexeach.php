

<html>
<head>
	<title>lista con ajax</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	   $(document).ready(function (){ 
	   	   
	   	   $("#listar").click(function (){

	   	   	//funcion ajax completo
	   	   	$.ajax({
	   	   		url:"lista.php",
	   	   		type:"POST",
	   	   		data: ' ',
	   	   		datatype:'json',
	   	   		success: function(dato){
	   	   			console.log(dato);
	   	   			
                    
	   	   			var estaciones= JSON.parse(dato);
	   	   			console.log(estaciones);
	   	   			var resp = "<ul>";
                    
                    $(estaciones).each(function(key,value){
                        resp += "<li>"+value.id+"-+-"+value.Nombre+"</li>";
                    });
		      		
		      
		           resp +="</ul>";
				$("#muestralista").append(resp);
                 
	   	   		}
	   	   	});



	   	   });


	   	});
	</script>
</head>
<body>
    
    <input id="listar" type="button" value="ver lista">
    <br/>
    <div id="muestralista"></div
</body>
</html>