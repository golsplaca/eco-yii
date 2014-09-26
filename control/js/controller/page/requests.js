function requests($scope) {

	var url = new String(window.location).split('#')[1];
	var menu = $("#main-menu-inner ul.navigation li a");

	$.each(menu, function(i, item){
		var href = $(this).attr("href").split('#')[1];
		if(url == href){
			//$scope.setPage();
		}
	});
}