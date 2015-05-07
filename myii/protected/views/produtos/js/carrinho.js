function scopeMainCarrinho($scope){

	$scope.scopeList['carrinho'] = getCookies('carrinho', true);

	$scope.verCarrinhoShowHide = (getCookies('carrinho') && getCookies('carrinho', true).length) ? true : false;

	$scope.calcularSubtotal = function(){
		$scope.preco_frete = 0;
		subtTotal = 0;
		$.each($scope.scopeList['carrinho'], function(key){
			subtTotal = subtTotal + parseFloat(calcularMoeda($scope.scopeList['carrinho'][key].preco_total)); 
		});
		$scope.preco_subTotal = formatReal(parseFloat(converteDecimal(subtTotal.toString())));

		$scope.preco_total = formatReal(parseFloat(converteDecimal(subtTotal + parseFloat($scope.preco_frete).toString())));
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
		$scope.calcularSubtotal();
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
		$scope.carrinhoItens = (getCookies('carrinho')) ? getCookies('carrinho', true).length : 0;
		$scope.verCarrinhoShowHide = (getCookies('carrinho') && getCookies('carrinho', true).length) ? true : false;
		window.location.href = "#/carrinho";
	};

	$scope.deleteItemCarrinho = function(index){
		$scope.preco_subTotal = ($scope.scopeList['carrinho'].length < 2) ? 0 : 1;
		$scope.scopeList['carrinho'].splice(index, 1);
		setUpdateCookies('carrinho', JSON.stringify($scope.scopeList['carrinho']));
	};

	$scope.continuarCompra = function(){
		window.location.href = "#/finalizar-compra";
	};
}