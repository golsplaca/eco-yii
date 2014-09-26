//controllar scope
function scopeController($scope, data, locat, scope){

	angular.forEach(data, function(val, key) {
		key = (key == 'data') ? scope : data;
		$scope.scopeList[key] = val;
    });

	msg = "msg provisoria, a msg definitiva deve vir do retorno rest.";
	data['token'] = '1234';
	//checkUserLogged(false, msg, locat, data['token']);

	//limpa todos os scopes
	$scope.user = {};
	$scope.master = {};
}

