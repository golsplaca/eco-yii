
function scopeMainProdutos($scope){
		
		$scope.tempTamanho = false;

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

		$scope.scopeList['produto'].pro_tamanho = objectVirgula($scope.scopeList['produto'].pro_tamanho);

	$scope.addCarrinho = function(){
		carrinho = getCookies('carrinho', true);
		if($scope.tempTamanho == false){
			$scope.msgTamanho = 'Por favor escolha um tamanho!';
			return;
		}
		i = $scope.scopeList['produto'];
		var tamanhoTemp = $scope.tempTamanho;
		var qt = 1;
		if(carrinho){
			countCarrinho = carrinho.length;

			for(var x=0;x < countCarrinho; x++){
				console.log(carrinho[x]);
				if(carrinho[x].id_produto == i.pro_id){
					if(carrinho[x].tamanho == tamanhoTemp){
						countCarrinho = x;
						qt++;
					}
				}
			}
			
			carrinho[countCarrinho] = {};
		}else{
			carrinho = [];
			countCarrinho = 0;
			carrinho[countCarrinho] = {};
		} 

	
		carrinho[countCarrinho].id_produto = i.pro_id;
		carrinho[countCarrinho].nome = i.pro_nome;
		carrinho[countCarrinho].imagem = i.pro_img_1;
		carrinho[countCarrinho].preco = i.pro_preco_por;
		carrinho[countCarrinho].quantidade = qt;
		carrinho[countCarrinho].tamanho = tamanhoTemp;
		
		setUpdateCookies('carrinho', JSON.stringify(carrinho));
		window.location.href = "#/carrinho";
	};

	$scope.medidaProduto = function(item){
		item = item.trim();
		$('.tamanho_sandalia').css("background", "#fff"); 
		$('.classTamanho .'+item).css("background","#999");
		$scope.msgTamanho = '';
		$scope.tempTamanho = item;
	}
}