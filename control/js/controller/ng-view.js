$app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'chieffancypants.loadingBar']);
pageUser = (getCookies('user', true)) ? 'site/minha_conta' : 'security/login' ;
$app.config(function($routeProvider, cfpLoadingBarProvider) {
	$routeProvider.when("/", {controller : pageInicial,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/produtos", {controller : actionPage,templateUrl : "view/modulos/site/produtos.html"});
	$routeProvider.when("/buscar", {controller : actionPage,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/cantinhodacliente", {controller : actionPage,templateUrl : "view/modulos/site/home.html"});
	$routeProvider.when("/contato", {controller : actionPage,templateUrl : "view/modulos/site/contato.html"});
	$routeProvider.when("/login", {controller : actionPage,templateUrl : "view/modulos/security/login.html"});
	$routeProvider.when("/user", {controller : actionPage,templateUrl : "view/modulos/"+pageUser+".html"});
	$routeProvider.when("/produto", {controller : actionPage,templateUrl : "view/modulos/site/produto.html"});
	$routeProvider.when("/carrinho", {controller : actionPage,templateUrl : "view/modulos/site/carrinho.html"});
	$routeProvider.when("/null", {controller : actionPage,templateUrl : "view/modulos/site/error/nenhum.html"});
	$routeProvider.when("/finalizar-compra", {controller : actionPage,templateUrl : "view/modulos/site/finalizar-compra.html"});
});
/*
	$.each(getCookies('page', true), function(i, item) {
		if(item.key != "false"){
			$routeProvider.when("/"+item.key, {controller : pageController,templateUrl : "view/modulo/"+item.url+".html"});
		}
	}); */

function pageInicial(){
	$(document).ready(function(){
		$('#search').val('');
		$('.slide-animate').fadeIn(500);
		showHideNgView();
	});
}

function actionPage(){
	$(document).ready(function(){
		$('#search').val('');
		$('.slide-animate').fadeOut(500);
		showHideNgView();
	});
}

function showHideNgView(){
	$(".contentNgView").hide();
	setTimeout(function(){	
		$(".contentNgView").fadeIn(1000);
	}, 100);
}