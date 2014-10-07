function scopeMainHome($scope){
	
	$scope.pageAcesso = "Produtos";

	$scope.buscarProdutos = function(id, action, nome){
				$scope.showHideBanner = false;
		url = 'myii/index.php?r=ecoProdutos/'+action+'&id='+id;
		$scope.carregarProdutos(url);
		$scope.pageAcesso = nome;

		window.location.href = "#/produtos";
	};
}