(function () {
    var app = angular.module('ucab-store', ['ngRoute']);

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
     }]);


    /**
     * Config
     */
     app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider)
     {
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
        })
        .otherwise({templateUrl: 'tpl/errores/404'});

        $locationProvider.html5Mode(true);
    }]);
 })();