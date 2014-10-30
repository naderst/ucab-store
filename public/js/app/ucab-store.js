(function () {
    var app = angular.module('ucab-store', ['ngRoute']);

    /**
     * Funciones privadas del módulo
     */

    function cargarZapatos(scope, http) {
        http.get('api/zapatos')
        .success(function(data) {         
            scope.zapatos = data;
        })
        .error(function(data) {
            console.log(data);
        });
    }

    function cargarZapato(scope, http, zapatoID) {
        http.get('api/zapatos/' + zapatoID)
        .success(function(data) {         
            scope.zapato = data;
        })
        .error(function(data) {
            console.log(data);
        });

    }

    function publicarComentario(scope, http, zapatoID) {
        http.post('api/zapatos/' + zapatoID + '/comentarios', scope.nuevoComentario)
        .success(function(data) {         
            scope.zapato.comentarios.push(scope.nuevoComentario);
            scope.nuevoComentario = {usuario:null, comentario:null};
        })
        .error(function(data) {
            console.log(data);
        });

    }

    /**
     * Controllers
     */
     app.controller('IndexController', ['$scope', '$http',
        function ($scope, $http) {
            // Atributos
            $scope.zapatos = cargarZapatos($scope, $http);
     }]);


     app.controller('ZapatoController', ['$scope', '$http', '$routeParams',
        function ($scope, $http, $routeParams) {
            // Atributos
            $scope.zapato = cargarZapato($scope, $http, $routeParams.zapatoID);
            $scope.nuevoComentario = {usuario:null, comentario:null};

            // Métodos
            $scope.publicarComentario = function() {
                publicarComentario($scope, $http, $routeParams.zapatoID);                
            }
     }]);


    /**
     * Config
     */
     app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider)
     {
        // Rutas
        $routeProvider
        .when('/', {
            templateUrl: 'tpl/index',
            controller: 'IndexController'
        })
        .when('/index', {
            templateUrl: 'tpl/index',
            controller: 'IndexController'
        })
        .when('/zapatos/:zapatoID', {
            templateUrl: 'tpl/zapato',
            controller: 'ZapatoController'
        });

        $locationProvider.html5Mode(true);
    }]);
 })();