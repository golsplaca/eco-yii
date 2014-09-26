function scopeMain($scope){
	
	var urlSearchAll = getUrl('grupoUsuario/buscarTodos');


	var urlBuscarAssociados 	= getUrl('grupoUsuario/buscarAssociados');
	var urlBuscarNaoAssociados	= getUrl('grupoUsuario/buscarNaoAssociados');
	
	var urlAssociar    = getUrl('grupoUsuario/associar');
	var urlDesassociar = getUrl('grupoUsuario/desassociar');

	//scopes de ctrl
	$scope.btnSearch = "Adicionar";
	$scope.associated_display = false;
	$scope.functionality_display = false;

	$scope.getUsersAssociated = function(id, scope, name){
		$scope.searchPerfil = name;
		$scope.btnSearch = "Buscar";
		$scope.functionality_display = false;
		$scope.associated_display = true;
		$scope.grupo_name = name;
		
		url = 'http://127.0.0.1/saga/teste/conexao.php?action=buscar-users';
		data = {"id":id};
		locations = false;
		$scope.searchDb(url, data, locations);

		$(".trGroupsUsers > td").css("background-color","");
		$(".groupUser"+id+" > td").css("background-color","#eee");
	}

	$scope.getUsersFunctionality = function(id, scope, name){
		$scope.functionality_display = true;
		$scope.associated_display = false;
		$scope.searchPerfil = name;
		$scope.grupo_name = name
		
		url = 'http://127.0.0.1/saga/teste/conexao.php?action=functionality';
		data = {"id":id};
		locations = false;
		$scope.searchDb(url, data, locations);

		$(".trGroupsUsers > td").css("background-color","");
		$(".groupUser"+id+" > td").css("background-color","#eee");
	}

	$scope.hideAssociated = function(){
		$(".trGroupsUsers > td").css("background-color","");
		$scope.searchPerfil = '';
		$scope.btnSearch = "Adicionar";
		$scope.associated_display = false;
	}

	$scope.hideFunctionality = function(){
		$(".trGroupsUsers > td").css("background-color","");
		$scope.searchPerfil = '';
		$scope.btnSearch = "Adicionar";
		$scope.functionality_display = false;
	}

	//remove perfil de usuários ----------------------------------------------
	$scope.removerItem = function(id, scopeName){
		$scope.functionality_display = false;
		url = "http://127.0.0.1/saga/teste/conexao.php?action=delete";
		$scope.searchPerfil = '';
		$scope.btnSearch = "Adicionar";
		data =  {"id": id };
		$scope.searchDb(url, data);	
	}

	$scope.idRemove 	= '';
	$scope.nameRemove 	= '';
	$scope.msgCofirm	= '';

	$scope.cacheScope = function(id, name, msg){
		$scope.idRemove 	= id;
		$scope.nameRemove 	= name;
		$scope.msgCofirm	= msg;
	}

	$scope.confirmRemover = function(){
			$scope.removerItem($scope.idRemove, $scope.nameRemove);
	}
	//-----------------------------------------------------------------------

	$scope.updateDt = function(id, name, scope){
		$scope.functionality_display = false;
		$scope.btnSearch = "Atualizar";
		$scope.updateId = id;
		$scope.searchPerfil = name;
		$scope.getUsersFunctionality(id, scope, name);
	}

	$scope.saveUpdateDt = function(scope){
		var log = '{ "id":"'+$scope.updateId+'",';
		angular.forEach($scope.master, function(val, key) {   	
			log += '"'+key+'":"'+val+'"'; 
		});
			log += '}';
		$scope.searchPerfil = "";
		url = "http://127.0.0.1/saga/teste/conexao.php?action=update";
		data = $.parseJSON(log);;
		$scope.searchDb(url, data);
		$scope.btnSearch = "Adicionar";	
	}

	$scope.insert = function(url, location, scope){
		var valida = true;
		angular.forEach($scope.scopeList[scope], function(val, key) {  
			if($scope.searchPerfil == val.grupo){
				valida = false;
				errorReporting(0, 'O perfil '+$scope.searchPerfil+' já existe!');
			} 
		});
		if(valida){
			$scope.searchPerfil = "";
			$scope.functionality_display = false;
			if($scope.btnSearch == 'Atualizar'){
				$scope.btnSearch = "Adicionar";
				$scope.saveUpdateDt(scope);
			}else if($scope.btnSearch == "Adicionar"){
				var log = [];
				$scope.scopeList[scope];
			 
			 	angular.forEach($scope.master, function(val, key) {
		       		this.push($scope.master);
		     	}, log);

			 	url = "http://127.0.0.1/saga/teste/conexao.php?action=insert";
			 	data = $scope.master;
				$scope.searchDb(url, data);
		     	angular.forEach($scope.scopeList[scope], function(val, key) {
		     		this.push($scope.scopeList[scope][key]);
		     	}, log);
				$scope.scopeList[scope] = log;
		       	//$scope.searchDb(url, data, locations);
		    }   
		} 	
	}

	setTimeout(function(){	    	
		url = "http://127.0.0.1/saga/teste/conexao.php";
		$scope.searchDb(url);
	}, 0);

	/*--------------------- DRAG AND DROP ------------------------*/
	var drag = 'grupos_usuarios';
	var drop = 'associacao_usuarios';
	try{
		useJs('.contentNgView', null, 'DragAndDrop');
		$('ul.sortable').multisortable($scope, drag, drop, false);
		$('ul#'+drop).sortable('option', 'connectWith', 'ul#'+drag);
		$('ul#'+drag).sortable('option', 'connectWith', 'ul#'+drop);
		//Arquivo config DragAndDrop
		useJs('head', 'control/js/components/DragAndDrop.js');
		listGroup($scope);
	}catch(e){
		console.log('Erro multisortable: '+e);
	}

	$scope.saveDragDrop = function(ids, action){
		var action = (action != drag) ? 'associar' : 'desassociar';
		url = "grupoUsuario/"+action;
		data = ids;
		$scope.searchDb(url, data);
	}

	$scope.ctrlSuccess = function (){
		$('ul#'+drag+' li').fadein();
		$('ul#'+drop+' li').fadein();
		$('div.loadding-drag-drop').fadeOut();
	}

	$scope.ctrlErro = function(error){
		$('div.loadding-drag-drop').fadeOut();
		$scope.scopeList[drag] = 0;
		$scope.scopeList[drag] = $scope.teste1;
		$scope.scopeList[drop] = 0;
		$scope.scopeList[drop] = $scope.teste2;
	};
}

function removeClassDragDrop(scope){
	scope = (scope == 'grupos_usuarios') ? 'associacao_usuarios' : 'grupos_usuarios';
	$("#"+scope+" > li").removeClass('selected'); 
}