function breadcrumb($scope){
	var url = new String(window.location).split('#')[1];
	$scope.breadcrumb = [{"name": name.toUpperCase(), "url":url }];
}