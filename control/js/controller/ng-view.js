//Control view ---------------------------------------------------------------------------------------

var dataPag = getCookies("menuHorizontal", true);

if(!dataPag){
	checkUserLogged(true, "não existe dados suficiente para montar o pagina!");
}

var dataPage = '[';
var dataMenuHorizontal = getCookies("menuHorizontal", true);
$.each(dataMenuHorizontal, function(i, item) {
	if(item.submenu){
		jsonPage(item.itensMenu);
	}else{
			dataPage += '{"key":"'+item.key+'", "url":"'+item.urlPage+'"},';
	}
});
function jsonPage(itens){
	$.each(itens, function(i, item) {
		if(item.submenu){
			jsonPage(item.itensMenu);
		}else{
			dataPage += '{"key":"'+item.key+'", "url":"'+item.urlPage+'"},';
		}
	});
}
dataPage += ']';
var n = dataPage.indexOf("]");
n = n-1;
var dataPage = dataPage.substring(0, n);
dataPage += ']';
setUpdateCookies("page", dataPage);
dataPage = $.parseJSON(dataPage);



$app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'chieffancypants.loadingBar']);
$app.config(function($routeProvider, cfpLoadingBarProvider) {
	$.each(dataPage, function(i, item) {
		if(item.key != "false"){
			$routeProvider.when("/"+item.key, {controller : pageController,templateUrl : "view/modulo/"+item.url+".html"});
		}
	});
});

