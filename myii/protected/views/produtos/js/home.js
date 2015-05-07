function scopeMainHome($scope){

	$scope.pageAcesso = "Produtos";
	$scope.nenhum_produto = false;
	$scope.buscarProdutos = function(id, action, nome){
				$scope.showHideBanner = false;
		url = 'myii/index.php?r=ecoProdutos/'+action+'&id='+id;
		$scope.carregarProdutos(url);
		$scope.pageAcesso = nome;

		window.location.href = "#/produtos";
	};

	$scope.user = {};
	$scope.cadastrarCompra = function(){

		if(!$scope.user.usu_email){
			errorReporting(0, "Todos os campos são de preenchimento obrigatorios!");
			return false;
		}

		if($scope.user.usu_senha || $scope.user.usu_senha == ""){
			if($scope.user.usu_senha.length < 6){
				errorReporting(0, "Á senha deve conter no minímo 6 caracteres!");
				return false;
			}else if($scope.user.usu_senha != $scope.user.usu_senha_v){
				errorReporting(0, "As senhas não coincidem!");
				return false; 
			}
		}else{
			errorReporting(0, "Os campos senha são obrigatorios!");
			return false;
		}

		console.log($scope.user);
		url = 'myii/index.php?r=ecoUsuario/createUser';
		$scope.searchDb(url, $scope.user, null, 'user');
	};
	$scope.minhaConta = function(){
		$scope.loginUser();
	};
}