//controllar scope
function scopeController($scope, data, locat, scope){

	/*
	angular.forEach(data, function(val, key) {
		key = (key == 'data') ? scope : data;
		$scope.scopeList[key] = val;
    });*/
	$scope.scopeList[scope] = $.parseJSON(data);

	switch(scope){
		case 'user':
			$scope.usuario_logado = $scope.scopeList[scope].usu_nome;
			if(data != 0 && data != 2){
				window.location.href = "#/";
			}
			
			break;
		case 'banner':
			$scope.showHideBanner = true;
			break;
		default:
	}
	console.log($scope.scopeList);



	//msg = "msg provisoria, a msg definitiva deve vir do retorno rest.";
	//data['token'] = '1234';
	//checkUserLogged(false, msg, locat, data['token']);

	//limpa todos os scopes
	$scope.user = {};
	$scope.master = {};
}
