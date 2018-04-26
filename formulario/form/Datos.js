var app = angular.module('Formulario', []);
app.controller('Controlador', ['$scope', function($scope){
    $scope.usuario={
      contraseña:"",
      confirmar:""
    };
}]);