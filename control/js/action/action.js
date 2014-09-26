function actionCtrl($scope){

	$scope.btnSearch = "Adicionar";

	$scope.remove = function(index, scopeName, action){

		//var id = $scope.scopeList[scopeName][index].id;
		//data =  {"id": id };
		$scope.searchDb(action, data);
		
		$scope.scopeList[scopeName].splice(index, 1);
	}

	$scope.updateDt = function(index, scope){
		$scope.btnSearch = "Atualizar";
		$scope.updateIndex = index;

		var val = $scope.scopeList[scope][index];
		$scope.searchGrupo = val.grupo;
		
	}

	$scope.saveUpdateDt = function(scope){
		var index = $scope.updateIndex;
		var log = '{';
		angular.forEach($scope.master, function(val, key) {   	
			log += '"'+key+'":"'+val+'"'; 
		});
			log += '}';
		$scope.scopeList[scope][index] = $.parseJSON(log);
		$scope.searchGrupo = "";

		$scope.btnSearch = "Adicionar";	
	}

	$scope.insertDT= function(url, location, scope){
		if($scope.btnSearch != 'Adicionar'){
			$scope.saveUpdateDt(scope);
		}else{
			var log = [];
			$scope.scopeList[scope];
		 
		 	angular.forEach($scope.master, function(val, key) {
	       		this.push($scope.master);
	     	}, log);

	     	angular.forEach($scope.scopeList[scope], function(val, key) {
	     		this.push($scope.scopeList[scope][key]);
	     	}, log);

			$scope.scopeList[scope] = log;
	       	//$scope.searchDb(url, data, locations);
	       	$scope.searchGrupo = "";
	    }
	}
	//breadcrumb
	//breadcrumb($scope);
}