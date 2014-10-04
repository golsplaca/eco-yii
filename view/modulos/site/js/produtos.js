
function scopeMainProdutos($scope){

		$scope.scopeList['produto'].pro_tamanho = objectVirgula($scope.scopeList['produto'].pro_tamanho);
		$scope.scopeList['produto'].pro_estoque = objectVirgula($scope.scopeList['produto'].pro_qd, $scope.scopeList['produto'].pro_tamanho);

		$scope.verificarEstoque =function(item){
			carrinho = getCookies('carrinho', true);

			if(carrinho){
				countCarrinho = carrinho.length;
				for(var x=0;x < countCarrinho; x++){
					if(carrinho[x].id_produto == $scope.scopeList['produto'].pro_id){
						if(item){
							if(carrinho[x].tamanho == item){
								if($scope.scopeList['produto'].pro_estoque[item] <= carrinho[x].quantidade){
									$scope.msgTamanho = 'Tamanho: '+item+' já está no carrinho! Estoque: '+ $scope.scopeList['produto'].pro_estoque[item];
									return true;
								}
							}
						}

						/*else{
							$.each($scope.scopeList['produto'].pro_tamanho, function(k, v){
								if(carrinho[x].tamanho == v){
									if($scope.scopeList['produto'].pro_estoque[v] <= carrinho[x].quantidade){
										$scope.msgTamanho = 'Medida: '+v+' já está adiconada no carrinho! Total estoque: '+ $scope.scopeList['produto'].pro_estoque[v];
										return true;
									}
								}
							});
						}*/
					}
				}
			}
			return false;
		};

		//$scope.verificarEstoque();
		
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
						qt = (carrinho[x].quantidade > 1) ? carrinho[x].quantidade : qt;
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
		carrinho[countCarrinho].codigo = i.pro_codigo;
		carrinho[countCarrinho].imagem = i.pro_img_1;
		carrinho[countCarrinho].preco = i.pro_preco_por;
		total = calcularMoeda(i.pro_preco_por) * qt;
		carrinho[countCarrinho].preco_total = formatReal(total);
		carrinho[countCarrinho].quantidade = qt;
		carrinho[countCarrinho].tamanho = tamanhoTemp;
		carrinho[countCarrinho].qt_max = i.pro_estoque[tamanhoTemp];

		setUpdateCookies('carrinho', JSON.stringify(carrinho));
		$scope.scopeList['carrinho'] = carrinho;
		$scope.carrinho();
	};

	$scope.medidaProduto = function(item){
		if($scope.scopeList['produto'].pro_estoque[item] < 1){
			$scope.msgTamanho = 'Tamanho indisponivél!';
			$('.classTamanho .'+item).css("opacity","0.1");
			return true;
		}
		if($scope.verificarEstoque(item)){
			$('.classTamanho .'+item).css("opacity","0.1");
			return;
		}
		item = item.trim();
		$('.tamanho_sandalia').css("background", "#fff"); 
		$('.classTamanho .'+item).css("background","#999");
		$scope.msgTamanho = '';
		$scope.tempTamanho = item;
	}
}