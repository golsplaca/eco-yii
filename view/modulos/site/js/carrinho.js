function scopeMainCarrinho($scope){
	$scope.titulo = 'd';
	$scope.carrinho = function(nome){
				$scope.carregarProdutos();

		$scope.titulo = nome;
		$scope.$digest;
		//$scope.scopeList['carrinho'] = getCookies("carrinho", true);
		/*
		id_produto
		quantidade
		nome
		img
		preco
		data
		*/

	};

	$scope.addItemCarrinho = function(i){

		if($scope.scopeList['carrinho']){
			var countCarrinho = $scope.scopeList['carrinho'].length + 1;
		}else{
			var countCarrinho = 0;
		}
		$scope.scopeList['carrinho'][countCarrinho].id_produto = i.pro_id;
		$scope.scopeList['carrinho'][countCarrinho].nome = i.pro_nome;
		$scope.scopeList['carrinho'][countCarrinho].imagem = i.pro_img_1;
		$scope.scopeList['carrinho'][countCarrinho].preco = i.pro_preco_por;
		$scope.scopeList['carrinho'][countCarrinho].quantidade = 1;

	};
}