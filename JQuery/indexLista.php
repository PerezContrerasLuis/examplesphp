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
           
          
		      		 for (var i = 0; i < estaciones.length; i++){

		      		 	resp += "<li>"+estaciones[i].id+"--"+estaciones[i].Nombre+"</li>";
		      		 	
		      		 	/*
		      			for (var j = 0; j < estaciones[0].length; j++){
		      		 		resp += "<li>"+estaciones[i][j]+"</li>";
				      			//resp += "<li>"+estaciones[i]+"</li>";
				      			console.log("dentro 2");
				      		}*/
				      		
		      		}
		      		
		      
		           resp +="</ul>";
				$("#muestralista").append(resp);
                 
	   	   		}
	   	   	});



	   	   });


	   	});
	      
	      function respuesta(val){
           var resp = "<ul>";
           var estaciones= val;
           console.log("----<br>"+estaciones);
		      for (var i = 0; i < estaciones.length; i++) {
		      	for (var j = 0; j < i.length; j++) {
		      		resp += "<li>demo</li>";
		      	};
		      };
		      console.log("----fin bucle");
		     resp +="</ul>";
		     return resp;
	      }
	</script>
</head>
<body>
    
    <input id="listar" type="button" value="ver lista">
    <br/>
    <div id="muestralista"></div
</body>
</html>