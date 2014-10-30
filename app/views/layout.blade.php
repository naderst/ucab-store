<!DOCTYPE html>
<html lang="en" ng-app="ucab-store">

<head>
    <meta charset="UTF-8">
    <title>UCAB store</title>
    {{ HTML::style('css/ucab-store.css'); }}
    {{ HTML::style('css/font-awesome.min.css'); }}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <base href="/ucab-store/public/"></base>
</head>

<body >
    <header id="header">
        <div class="content">
            <a href="index"><img src="img/logo.png" alt="UCAB store" id="logo" height="60"></a>
        </div>
    </header>


    <section id="content">
    
    	<div ng-view></div>

    </section>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular-route.js"></script>
    <!-- AngularJS App -->
    {{ HTML::script('js/app/ucab-store.js') }}
</body>

</html>