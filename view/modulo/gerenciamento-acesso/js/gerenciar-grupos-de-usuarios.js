function scopeMain($scope){
	
	var urlSearchAll = getUrl('grupoUsuario/buscarTodos');
	var urlInsert 	 = getUrl('grupoUsuario/inserir');
	var urlUpdate 	 = getUrl('grupoUsuario/alterar');
	var urlRemover 	 = getUrl('grupoUsuario/remover');

	var urlBuscarAssociados 	= getUrl('grupoUsuario/buscarAssociados');
	var urlBuscarNaoAssociados	= getUrl('grupoUsuario/buscarNaoAssociados');
	
	var urlAssociar    = getUrl('grupoUsuario/associar');
	var urlDesassociar = getUrl('grupoUsuario/desassociar');

	//variaveis utilizadas na pag.
	$scope.btnSearch = "Adicionar";
	$scope.associated_display = false;

	//buscar todos usuarios associados.. 
	$scope.getUsersAssociated = function(id, scope, name){
		$scope.associated_display = true;
		$scope.grupo_name = name;
		
		url = urlBuscarAssociados;
		data = {"data":'{"id":'+id+'}'};
		$scope.searchDb(urlBuscarAssociados, data, false, 'usuarios_associados');
		$scope.searchDb(urlBuscarNaoAssociados, data, false, 'usuarios_n_associados');

		$(".trGroupsUsers > td").css("background-color","");
		$(".groupUser"+id+" > td").css("background-color","#eee");
	}

	//Oculta div de associação
	$scope.hideAssociated = function(){
		$scope.searchGrupo = '';
		$scope.btnSearch = "Adicionar";
		$scope.associated_display = false;
	}

	//remove grupo de usuários ----------------------------------------------
	$scope.removerItem = function(id, scopeName){
		$scope.associated_display = false;
		$scope.searchGrupo = '';
		$scope.associated_display = false;
		url = urlRemover;
		data =  {"data": '{"id": '+id+'}'};
		$scope.searchDb(url, data, null, 'grups_user_remove');	
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

	//Buscar todos os usuarios associados e não associados
	$scope.updateDt = function(id, name, scope){
		$scope.associated_display = true;
		$scope.btnSearch = "Atualizar";
		$scope.updateId = id;
		$scope.searchGrupo = name;
		$scope.getUsersAssociated(id, scope, name);
	}

	$scope.saveUpdateDt = function(scope){
		$scope.searchGrupo = "";
		
		var log = '{"id":'+$scope.updateId+',';
		angular.forEach($scope.master, function(val, key) {   	
			log += '"'+key+'":"'+val+'"'; 
			$scope.nameUpdate = val;
		});
		log += '}';
	
		url = urlUpdate;
		data = {"data": log };
		$scope.searchDb(url, data, null, 'grups_user_update');
	}

	$scope.insert = function(url, location, scope){
		var valida = true;
		angular.forEach($scope.scopeList[scope], function(val, key) {  
			if($scope.searchGrupo == val.nome){
				valida = false;
				errorReporting(0, 'O grupo '+$scope.searchGrupo+' já existe!');
			} 
		});
		if(valida){
			$scope.searchGrupo = "";
			$scope.associated_display = false;
			if($scope.btnSearch == 'Atualizar'){
				$scope.saveUpdateDt(scope);
				$scope.btnSearch = "Adicionar";
			}else if($scope.btnSearch == "Adicionar"){
				url = urlInsert;
			 	data = {"data":JSON.stringify($scope.master)};
				$scope.searchDb(url, data, null, 'grups_user_insert');
		    }
		} 	
	}

	setTimeout(function(){	    	
		url = urlSearchAll;
		$scope.searchDb(url, null, null, 'grups_user');
	}, 500);


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
		console.log('Exception multisortable: '+e);
	}

	$scope.saveDragDrop = function(ids, action){
		var url = (action != drag) ? urlAssociar : urlDesassociar;
		data = ids;
		$scope.searchDb(url, data);
	}

	$scope.ctrlSuccess = function(scope){
		switch(scope){
			case 'grups_user_insert':
		     	$scope.scopeList['grups_user'].push($scope.scopeList[scope]);
			break;
			case 'grups_user_remove':
			case 'grups_user_update':
				var log = [];
				angular.forEach($scope.scopeList['grups_user'], function(val, key) {   	
					if(scope == 'grups_user_update'){
						if($scope.updateId == val.id){
							val.nome = $scope.nameUpdate; 
						} 
						log.push(val);
					}else if($scope.idRemove != val.id){
						log.push(val); 
					}
				});
				$scope.scopeList['grups_user'] = log;
			break;
			default:
		}


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




