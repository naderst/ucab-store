<!-- Filtro de zapatos -->
<div class="input-container">
	<i class="fa fa-search"></i>
	<input type="text" placeholder="Filtrar zapatos" ng-model="filtro">
</div>

<div class="fix margin"></div>

<!-- Lista de zapatos -->
<article class="zapato" ng-repeat="zapato in zapatos | filter:filtro">
	<div class="imagen" style="background-image: url('img/zapatos/{{zapato.foto}}');"></div>
	<h2><a href="zapatos/{{zapato.id}}" ng-bind="zapato.modelo"></a></h2>
	<p ng-bind="zapato.descripcion"></p>
	<h3 class="right" ng-bind="zapato.precio | currency:'VEF '"></h3>
</article>

<div class="fix"></div>