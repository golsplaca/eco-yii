//controllar scope
function scopeController($scope, data, locat, scope){

	/*
	angular.forEach(data, function(val, key) {
		key = (key == 'data') ? scope : data;
		$scope.scopeList[key] = val;
    });*/
	$scope.scopeList[scope] = $.parseJSON(data);

	switch(scope){
		case 'produtos':
			if(new String(window.location).split('#')[1] != '/' && new String(window.location).split('#')[1] != '/produtos'){
				window.location.href = "#/produtos";
			}
			$scope.ngAlertProdutos = ($scope.scopeList[scope].length > 0) ? false : true ;
		break;
		case 'user':
			if(data == 0){
				errorReporting(0, "E-mail ou senha estão incorretos!");
				return;
			}else if(data == 2){
				errorReporting(0, "Usuário Inativo!");
				return;
			}else if(data == 7){
				errorReporting(0, "Ocorreu um erro por favor verifique as informações e tente novamente!");
				return;
			}else if(data == 8){
				errorReporting(0, "Já existe um usuário cadastrado com este e-mail!");
				return;
			}
			setUpdateCookies('user', data);
			$scope.usuario_logado = $scope.scopeList[scope].usu_nome;
			if(data != 0 && data != 2){
				window.location.href = "#/produtos";
			}
			break;
		case 'banner':
			$scope.showHideBanner = true;
			break;	
		default:
	}



	//msg = "msg provisoria, a msg definitiva deve vir do retorno rest.";
	//data['token'] = '1234';
	//checkUserLogged(false, msg, locat, data['token']);

	//limpa todos os scopes
	$scope.user = {};
	$scope.master = {};
}
