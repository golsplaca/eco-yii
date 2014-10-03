function pageController($scope, $http, $timeout, cfpLoadingBar){
	
	$(document).ready(function(){
			$(".contentNgView").hide();
		setTimeout(function(){	
			$(".contentNgView").fadeIn(1000);
		}, 100);
	});

		$scope.userPost = {};


		cfpLoadingBar.complete();

	    $scope.scopeList = {};

	    $scope.usuario_logado = "visitante. Entrar";

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
		url = 'myii/index.php?r=ecoProdutos/json';
		$scope.searchDb(url, null, null, 'produtos');
	};

	$scope.verProduto = function(item){
		$scope.scopeList['produto'] = item;
		console.log($scope.scopeList['produto']);
		$scope.imgProduto = [];
		if($scope.scopeList['produto'].pro_img_1 != ''){
			$scope.imgProduto[0] = $scope.scopeList['produto'].pro_img_1;
		}

		if($scope.scopeList['produto'].pro_img_2 != ''){
			$scope.imgProduto[1] = $scope.scopeList['produto'].pro_img_2;
		}

		if($scope.scopeList['produto'].pro_img_3 != ''){
			$scope.imgProduto[2] = $scope.scopeList['produto'].pro_img_3;
		}

		if($scope.scopeList['produto'].pro_img_4 != ''){
			$scope.imgProduto[3] = $scope.scopeList['produto'].pro_img_4;
		}

		if($scope.scopeList['produto'].pro_img_5 != ''){
			$scope.imgProduto[4] = $scope.scopeList['produto'].pro_img_5;
		}

	console.log($scope.imgProduto);
		window.location.href = "#/produto";
	};

	useJs('head', 'view/modulos/site/js/carrinho.js');
	scopeMainCarrinho($scope);

	switch(new String(window.location).split('#')[1]){
		case '/login':
			useJs('head', 'view/modulos/security/js/login.js');
			scopeMainLogin($scope);
		break;
		case '/produto':
			//useJs('head', 'view/modulos/site/js/produtos.js');
			//scopeMainProdutos($scope);
		break;
		default:  

	}


	$scope.loginUser = function(){
		useJs('head', 'view/modulos/security/js/login.js');
		scopeMainLogin($scope);
		window.location.href = "#/login";
	};

	

	cfpLoadingBar.complete();
}
