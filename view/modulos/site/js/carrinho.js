function scopeMainCarrinho($scope){

	$scope.scopeList['carrinho'] = getCookies('carrinho', true);
	$scope.preco_subTotal = 0;
	$scope.preco_frete = 0;
	$scope.calcularSubtotal = function(){
		$.each($scope.scopeList['carrinho'], function(key){
			$scope.preco_subTotal = $scope.preco_subTotal + calcularMoeda($scope.scopeList['carrinho'][key].preco_total); 
			console.log($scope.preco_subTotal);
		});
		$scope.preco_total = $scope.preco_subTotal + $scope.preco_frete;
	};
	
	if($scope.scopeList['carrinho']){
		$scope.calcularSubtotal(); 
		$scope.carrinhoItens = $scope.scopeList['carrinho'].length;
		$scope.item = ($scope.carrinhoItens > 1) ? 'itens' : 'item'; 
	}

	$scope.quantidadeCarrinho = function(i, qt){
		(qt) ?	$scope.scopeList['carrinho'][i].quantidade++ : $scope.scopeList['carrinho'][i].quantidade--; 
		total = calcularMoeda($scope.scopeList['carrinho'][i].preco) * $scope.scopeList['carrinho'][i].quantidade;
		$scope.scopeList['carrinho'][i].preco_total = formatReal(total);
		setUpdateCookies('carrinho', JSON.stringify($scope.scopeList['carrinho']));
	};
/*
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

	}; */

	$scope.carrinho = function(){
		$scope.pageAcesso = 'Carrinho';
		window.location.href = "#/carrinho"
	}

	$scope.deleteItemCarrinho = function(index){
		$scope.scopeList['carrinho'].splice(index, 1);
		setUpdateCookies('carrinho', JSON.stringify($scope.scopeList['carrinho']));
	}
}