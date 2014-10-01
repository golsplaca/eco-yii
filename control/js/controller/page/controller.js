function pageController($scope, $http, $timeout, cfpLoadingBar){
	
	$(document).ready(function(){
			$(".contentNgView").hide();
		setTimeout(function(){	
			$(".contentNgView").fadeIn(1000);
		}, 100);
	});


		cfpLoadingBar.complete();
		console.log($scope.scopeList);
	    $scope.scopeList = {};

	  $scope.currentPage = 1;
	  $scope.executeScope = function(){
	    $scope.setPage();
	  }

	  /* params = array() do tipo post, exemplo: &rest=ulr&id=0; */
	  $scope.searchDb = function(url, data, location, scope){
		cfpLoadingBar.start();
		if(url && url != 'undefined'){
	    	connection(url, data, location, $scope, cfpLoadingBar, scope);
	  	}else{
	  		cfpLoadingBar.complete();
	  	}
	  };

	//Recebe e seta dados de formularios
	validateForms($scope);
	//Controle de ações
	actionCtrl($scope);

	$scope.searchCategory = function(){
		url = 'myii/index.php?r=ecoCategoria/index&json';
		$scope.searchDb(url, null, null, 'category');
	};

	$scope.carregarBanner = function(){
		url = 'myii/index.php?r=ecoBanner/index&json';
		$scope.searchDb(url, null, null, 'banner');
	};

	$scope.carregarProdutos = function(){
		url = 'myii/index.php?r=ecoProdutos/index&json';
		$scope.searchDb(url, null, null, 'produtos');
	};


	useJs('head', 'view/modulos/site/js/carrinho.js');
	scopeMainCarrinho($scope);

	cfpLoadingBar.complete();
}
