<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UCAB store</title>
    {{ HTML::style('css/ucab-store.css'); }}
    {{ HTML::style('css/font-awesome.min.css'); }}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <header id="header">
        <div class="content">
            <img src="img/logo.png" alt="UCAB store" id="logo" height="60">
        </div>
    </header>


    <section id="content">
        <div class="input-container">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Filtrar zapatos">
        </div>
        <div class="fix"></div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</body>

</html>