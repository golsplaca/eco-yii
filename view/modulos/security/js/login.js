function scopeMainLogin($scope){

	$scope.logar = function(){
		url = 'myii/index.php?r=ecoUsuario/logar';
		$scope.searchDb(url, $scope.userPost, null, 'user');
	};

}