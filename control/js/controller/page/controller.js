function pageController($scope, $http, $timeout, cfpLoadingBar){
	$(".contentNgView").hide();	
	'use strict';
	try{
	  	automaticInclude($scope);
	}catch(e){ console.log("Erro include: "+e); }

	$(".contentNgView").fadeIn(1000);
	cfpLoadingBar.complete();
    $scope.scopeList = {};

	  $scope.currentPage = 1;
	  $scope.executeScope = function(){
	    $scope.setPage();
	  }

	  $scope.setPage = function(){
	    url = '';
	    data = '';
	    action = '';
	    locations = false;
	    data = $scope.currentPage;
	    $scope.searchDb(url, data, locations);
	  };

	  //$scope.maxSize = 5;
	  //$scope.bigTotalItems = 175;
	  //$scope.bigCurrentPage = 10;

	  /* params = array() do tipo post, exemplo: &rest=ulr&id=0; */
	  $scope.searchDb = function(url, data, location, scope){
		cfpLoadingBar.start();
		if(url && url != 'undefined'){
	    	connection(url, data, location, $scope, cfpLoadingBar, scope);
	  	}else{
	  		cfpLoadingBar.complete();
	  	}
	  }

	//Recebe e seta dados de formularios
	validateForms($scope);

	//Montar menu
	if($("#main-menu-inner ul.navigation").length < 1 && $(".right-navbar-nav li").length < 1 ){
		dataMountMenu($scope);
	}
	requests($scope);

	//Controle de ações
	actionCtrl($scope);

}
