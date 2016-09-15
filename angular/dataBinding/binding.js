var app = angular.module("MyFirtsApp",[]);
app.controller("MyFirtsController",function($scope){
    $scope.nombre = "Ejemplo tomado del codigo facilito ";

    /*creamos un objeto que contendra comentarios
    los atributos seran nombre y comentario
    */
    $scope.nuevoComentario={};

    //definimos arreglo que contendra comentario ya definidos
    $scope.comentarios = [
    	{comentario:"primer comentario",nombre:"luis perez"},
    	{comentario:"segundo comentarios", nombre:"godinez"}
    ];

    //funcion que es llamado por el boton ng-click para agregar un nuevo comentario
    $scope.agregarComentario = function(){
    	$scope.comentarios.push($scope.nuevoComentario);
    	//reiniciamos nuestros input forms
    	$scope.nuevoComentario ={};
    }
});