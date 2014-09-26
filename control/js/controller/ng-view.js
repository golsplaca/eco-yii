$app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'chieffancypants.loadingBar']);
$app.config(function($routeProvider, cfpLoadingBarProvider) {
	$.each(getCookies('page', true), function(i, item) {
		if(item.key != "false"){
			$routeProvider.when("/"+item.key, {controller : pageController,templateUrl : "view/modulo/"+item.url+".html"});
		}
	});
});

