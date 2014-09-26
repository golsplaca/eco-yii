function listGroup($scope, action, scope) {
	$scope.dragDrop = function(listAdd, listRemove){
		
		if(!$scope.scopeList[listAdd]){
			$scope.scopeList[listAdd] = [];
		}
		
		var data = $('ul#'+listAdd+' li.selected');

		$('ul#'+listAdd+' li').hide();
		$('ul#'+listRemove+' li').hide();
		$('div.loadding-drag-drop').fadeIn();

		$scope.teste1 = [];
		$scope.teste2 = [];

		angular.forEach($scope.scopeList[listRemove], function(val, key) {	
			$scope.teste2.push({
	            id: val.id,
	            name: val.name,
        	});
     	});
		angular.forEach($scope.scopeList[listAdd], function(val, key) {
			$scope.teste1.push({
	            id: val.id,
	            name: val.name,
        	});
     	});	

		var ids = '[';
		$.each(data, function(i, item){	
			var index = $(this).attr('value');
			angular.forEach($scope.scopeList[listRemove], function(val, key) {
				if(index == val.id){
					ids += '"'+val.id+'", ';
					$scope.scopeList[listAdd].push({
			            id: val.id,
			            name: val.name,
		        	});
					$scope.scopeList[listRemove].splice(key, 1);
				}
     		});
		});	
		ids += ']';
		var n = ids.indexOf(']');
		n = n - 2;
		ids = ids.substring(0, n);
		ids += ']';

		$scope.saveDragDrop(ids, listAdd);
	}	
}

