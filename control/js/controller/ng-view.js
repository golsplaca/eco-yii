
$app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'chieffancypants.loadingBar']);
$app.config(function($routeProvider, cfpLoadingBarProvider) {
	$routeProvider.when("/", {controller : null,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/contato", {controller : null,templateUrl : "view/modulos/site/contato.html"});
	$routeProvider.when("/login", {controller : null,templateUrl : "view/modulos/security/login.html"});
	$routeProvider.when("/produto", {controller : null,templateUrl : "view/modulos/site/produto.html"});
});
/*
	$.each(getCookies('page', true), function(i, item) {
		if(item.key != "false"){
			$routeProvider.when("/"+item.key, {controller : pageController,templateUrl : "view/modulo/"+item.url+".html"});
		}
	}); */
