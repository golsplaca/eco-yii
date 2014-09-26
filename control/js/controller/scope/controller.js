//controllar scope
function scopeController($scope, data, locat, scope){

	//$scope.totalItems = data['total'];

	angular.forEach(data, function(val, key) {
		key = (key == 'data') ? scope : data;
		$scope.scopeList[key] = val;
    });
console.log($scope.scopeList);
	msg = "msg provisoria, a msg definitiva deve vir do retorno rest.";
	data['token'] = 'dfasd';
	//checkUserLogged(false, msg, locat, data['token']);

	//limpa todos os scopes
	$scope.user = {};
	$scope.master = {};
}

