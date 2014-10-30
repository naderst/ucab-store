<article class="zapato-full">
    <div class="imagen" style="background-image: url('img/zapatos/{{zapato.foto}}');"></div>
    <h2 ng-bind="zapato.modelo"></h2>
    <p ng-bind="zapato.descripcion"></p>
    <h3 class="right" ng-bind="zapato.precio"></h3>
    <h3 class="left" ng-show="zapato.tallas">Tallas: <span class="talla" ng-repeat="talla in zapato.tallas">{{talla.talla}}</span></h3>
    <div class="fix"></div>
</article>

<hr>

<section class="comentarios" ng-show="zapato.comentarios">
    <h3>Comentarios</h3>
    <ul>
        <li ng-repeat="comentario in zapato.comentarios">
            <span class="usuario" ng-bind="comentario.usuario"></span>
            <span class="comentario" ng-bind="comentario.comentario"></span>
        </li>
    </ul>
</section>

<section class="nuevo-comentario">
    <h3 class="margin-small">Nuevo comentario</h3>

    <div class="input-container">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Nombre">
    </div>

    <div class="fix margin-small"></div>

    <div class="input-container large">
        <i class="fa fa-lightbulb-o"></i>
        <input type="text" placeholder="Comentario">
    </div>

    <div class="fix margin-small"></div>

    <a href="javascript:void(0);" class="button">Agregar</a>

    <div class="fix"></div>
</section>