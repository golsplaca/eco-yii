
$app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'chieffancypants.loadingBar']);
$app.config(function($routeProvider, cfpLoadingBarProvider) {
	$routeProvider.when("/", {controller : null,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/produtos", {controller : null,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/buscar", {controller : null,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/cantinhodacliente", {controller : null,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/contato", {controller : null,templateUrl : "view/modulos/site/contato.html"});
	$routeProvider.when("/login", {controller : null,templateUrl : "view/modulos/security/login.html"});
	$routeProvider.when("/produto", {controller : null,templateUrl : "view/modulos/site/produto.html"});
	$routeProvider.when("/carrinho", {controller : null,templateUrl : "view/modulos/site/carrinho.html"});
	$routeProvider.when("/null", {controller : null,templateUrl : "view/modulos/site/error/nenhum.html"});
});
/*
	$.each(getCookies('page', true), function(i, item) {
		if(item.key != "false"){
			$routeProvider.when("/"+item.key, {controller : pageController,templateUrl : "view/modulo/"+item.url+".html"});
		}
	}); */
