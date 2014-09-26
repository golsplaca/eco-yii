function validateForms($scope){
	$scope.master = {};
	$scope.user = {};

    $scope.update = function(action, scop) {
    	var required = true;
    	$.each($("input.required"), function(){
			var value = $(this).val();
			var type = $(this).attr('type');
			var name = $(this).attr('name');
				switch(type){
			   		case 'radio': if(!$scope.user[name]){ required = false; }
			    	case 'checkbox': if(!$scope.user[name]){ required = false; }
				   	default: if(!value || value == ""){ required = false; }
				}
      	});
      	$.each($("select.required"), function(){
			var value = $(this).attr('value');
			if(!value || value == ""){ required = false; }
      	});
      	if(required){
      		$scope.addValueScope();
	        $scope.master = angular.copy($scope.user);
	        var url = $("form").attr('url');
	        var location = $("form").attr('location');
	    	switch(action){
	    		case "update":
					$scope.updateDt(url, location, scop);
	    		break;
	    		case "insert":
					$scope.insert(url, location, scop);
	    		break;
	    		default:
	    			$scope.searchDb(url, $scope.master, location);
	    	}
	    	required = true;
    	}
    };

    //limpar scope master e user.
    $scope.reset = function() {
      $scope.user = {};
      $scope.master = {};
    };

    //add value para scope, motivo inputs com mascara não permintem o uso do ng-model.
    $scope.addValueScope = function(){
		$.each($("input.maskInput"), function(){
			var name  = $(this).attr('name');
			var value = $(this).val();
			$scope.user[name] = value;
		});
    }
}