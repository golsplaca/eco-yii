<?php 

echo '{"returnCode":0, 
		"data":{"name":"Administrador Master", "login":"ADMINM", "email":"jose.vilela@alfa.br", "status":"A", "lastChangeDate":"Tue Mar 13 00:00:00 BRT 2012", 
		"nomeGrupo":"Desenvolvimento", "idGrupo":1, "menus":[{"itensMenu":
		[{"itensMenu":[{"key":"gerenciar-grupos", "urlPage":"gerenciamento-acesso/gerenciar-grupos-de-usuarios", "urlRequest":"", "target":"", "operacoes":[{"label":"Adicionar", "icon":"glyphicon-cog", "id":1}, {"label":"Alterar", "icon":"glyphicon-cog", "id":2}, 
		{"label":"Remover", "icon":"glyphicon-cog", "id":3}, {"label":"Visualizar", "icon":"glyphicon-cog", "id":4}, {"label":"Associar", "icon":"glyphicon-cog", "id":5}],
		 "submenu":false, "label":"Gerenciar grupos", "icon":"glyphicon-off", "id":1}, {"key":"gerenciar-perfis", "urlPage":"gerenciamento-acesso/gerenciar-perfil-de-funcoes", 
		 "urlRequest":"", "target":"", "operacoes":[{"label":"Adicionar", "icon":"glyphicon-cog", "id":1}, {"label":"Alterar", "icon":"glyphicon-cog", "id":2}, {"label":"Remover", "icon":"glyphicon-cog", "id":3},
		  {"label":"Visualizar", "icon":"glyphicon-cog", "id":4}, {"label":"Associar", "icon":"glyphicon-cog", "id":5}], "submenu":false, "label":"Gerenciar perfis", "icon":"glyphicon-user", "id":2},
		   {"key":"gerenciar-usuarios", "urlPage":"gerenciamento-acesso/gerenciar-usuarios", "urlRequest":"", "target":"", "operacoes":[{"label":"Adicionar", "icon":"glyphicon-cog", "id":1},
		    {"label":"Alterar", "icon":"glyphicon-cog", "id":2}, {"label":"Remover", "icon":"glyphicon-cog", "id":3}, {"label":"Visualizar", "icon":"glyphicon-cog", "id":4}, {"label":"Associar", "icon":"glyphicon-cog", "id":5}], "submenu":false, "label":"Gerenciar usuários", "icon":"glyphicon-user", "id":3}, {"itensMenu":
		    [{"key":"logoff", "urlPage":"", "urlRequest":"", "target":"", "submenu":false, "label":"Sair", "icon":"glyphicon-off", "id":6}], "submenu":true, "label":"Usuario", "icon":"glyphicon-user", "id":5}],
		     "submenu":true, "label":"Administração", "icon":"glyphicon-cog", "id":4}], "label":"configuracao", "icon":"", "id":1}], "id":1}, 
     		"token":"4318946133746465"}';

//$teste = (json_decode($json));
//echo json_encode($teste);

/*
$submenu = array(
		'nome' => '...', 
		'key' => '...', 
		'url_page' => '...', 
		'url_request' => '...', 
		'icon' => '...', 
		'target' => '...', 
		'submenu' => false);

$data['menu-vertical'][] = array(
	'nome' => '...', 
	'icon' => '...', 
	'submenu' => $submenu
	);

$data['menu-vertical'][] = array(
	'nome' => '...', 
	'key' => '...', 
	'url_page' => '...', 
	'url_request' => '...', 
	'icon' => '...', 
	'target' => '...', 
	'submenu' => false

	);

$data['menu-horizontal'][] = array(
	'nome' => '...', 
	'key' => '...', 
	'url_page' => '...', 
	'url_request' => '...', 
	'icon' => '...', 
	'target' => '...', 
	'submenu' => false
	);
$data['menu-horizontal'][] = array(
	'nome' => '...', 
	'icon' => '...', 
	'submenu' => $submenu
	);
*/
	//echo json_encode($data); 
?>