function scopeMain($scope){
	$scope.userLabel = [];
	
	var urlSearchAll = getUrl('grupoUsuario/buscarTodos');
	
	//search user manage config 
	$scope.getLocation = function(val) {
  	if(val.length >= 3){
		    return $.post('json.php?address='+val)
		    .then(function(res){
		      res = [{"id": 20, "name": "menu nome 1!"}, {"id": 21, "name": "menu nome 2"}, {"id": 22, "name": "menu nome 3"}];
		      var addresses = [];
		      angular.forEach(res, function(item){
		      addresses.push(item.name);
		      $scope.userLabel[item.name] = item.id;
		    });
		      return addresses;
		    });
	  	}
	}

	$scope.searchUserManage = function(){
		var id = $scope.userLabel[$scope.asyncSelected];

		if(id > 0){
			$scope.userTools = true;
			$scope.userManage = $scope.asyncSelected;
			$scope.searchDb(urlSearchAll, null, null, 'grups_user');
		}
	}

	$scope.saveUserChanges = function(){

	}

	$scope.cancelUserChanges = function(){
		$scope.userTools = false;
		$scope.userManage = '';
	}
}




