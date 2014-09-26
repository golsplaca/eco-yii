function dataMountMenu($scope){
	var dataMenu = getCookies("menuHorizontal", true);
	if(typeof dataMenu == 'object' && dataMenu){
		mountMenuVertical(dataMenu, $scope);
	}else{

		checkUserLogged(true, "não existe dados suficiente para montar o menu vertical!");
	}

	var dataMenuHorizontal = getCookies("menuHorizontal", true);
	if(typeof dataMenuHorizontal == 'object' && dataMenuHorizontal){
		mountViewMenuHorizontal(dataMenuHorizontal, $scope);
	}else{
		checkUserLogged(true, "não existe dados suficiente para montar o menu horizontal!");
	}
}