function pageController($scope, $http, $timeout, cfpLoadingBar){

		$scope.inputs = {};

		$scope.userPost = {};

		cfpLoadingBar.complete();

	    $scope.scopeList = {};
	   	user_logado = getCookies('user', true);	
		$scope.usuario_logado = (user_logado) ? user_logado.usu_nome : 'Visitante' ;

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
	//validateForms($scope);
	//Controle de ações
	actionCtrl($scope);

	$scope.searchColecoes = function(){
		url = 'myii/index.php?r=ecoColecoes/json';
		$scope.searchDb(url, null, null, 'colecoes');
	};

	$scope.searchCategory = function(){
		url = 'myii/index.php?r=ecoCategoria/json';
		$scope.searchDb(url, null, null, 'category');
	};

	$scope.carregarBanner = function(){
		url = 'myii/index.php?r=ecoBanner/index&json';
		$scope.searchDb(url, null, null, 'banner');
	};

	$scope.carregarProdutos = function(url){
		if(!url){
			url = 'myii/index.php?r=ecoProdutos/json';
		}
		if(url == 'search'){
			$('.slide-animate').fadeOut(500);
			url = 'myii/index.php?r=ecoProdutos/json&search='+$scope.inputs.search;
		}else{
			setUpdateCookies('produtos', url);
		}
		$scope.searchDb(url, null, null, 'produtos');
	};

	$scope.verProduto = function(item){
		setUpdateCookies('produto', JSON.stringify(item));
		$scope.scopeList['produto'] = item;
		$scope.pageAcesso = item.pro_nome
		useJs('head', 'view/modulos/site/js/produtos.js');
		scopeMainProdutos($scope);

		window.location.href = "#/produto";
	};

	useJs('head', 'view/modulos/site/js/home.js');
	scopeMainHome($scope);
	useJs('head', 'view/modulos/site/js/carrinho.js');
	scopeMainCarrinho($scope);

	switch(new String(window.location).split('#')[1]){
		case '/user':
			useJs('head', 'view/modulos/security/js/login.js');
			scopeMainLogin($scope);
		break;
		case '/produto':
			$scope.verProduto(getCookies('produto', true));
		break;
		case '/produtos':
			$scope.carregarProdutos(getCookies('produtos'));
		break;
		default:  
	}
	$scope.loginUser = function(){
		useJs('head', 'view/modulos/security/js/login.js');
		scopeMainLogin($scope);
		window.location.href = "#/user";
	};
	cfpLoadingBar.complete();
}
