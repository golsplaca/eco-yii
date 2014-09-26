<?php
	$host  = "10.100.10.192";
	$user  = "root";
	$pass  = "64724100";
	$data  = "saga-teste";
	$conect = mysql_connect($host, $user, $pass);
	 
	//if (!$conect) die ("Falha na conexao com o Banco de Dados!");
	 	
	if(!$db = mysql_select_db($data, $conect)){ 
		echo "Banco de dados não foi encontrado!";
		exit();
	}

	function buscarUsers(){
		$data = '';
		$sql = mysql_query("SELECT * FROM grups_user");
		if($sql){
			while($dados = mysql_fetch_array($sql)){
				$data['associacao_usuarios'][] = array( 
					'id' => $dados['id'],
					'name' => $dados['descricao'],
					);
				$data['grupos_usuarios'][] = array( 
					'id' => $dados['id'],
					'name' => $dados['descricao'],
				);
			}
			return $data;
		}else{
			return null;
		}
	}

	function functionality(){
		$data = '';
		$sql = mysql_query("SELECT * FROM grups_user");
		if($sql){
			while($dados = mysql_fetch_array($sql)){
				for($i = 0; $i < 4; $i++){
					switch ($i) {
						case 1: $name = 'Associar'; $icon = 'glyphicon-search'; break;
						case 2: $name = 'Inserir'; $icon = 'glyphicon-plus'; break; 
						case 3: $name = 'Editar'; $icon = 'glyphicon-pencil'; break; 
						case 4: $name = 'Excluir'; $icon = 'glyphicon-trash'; break;
						default: $name = 'Consultar'; $icon = 'glyphicon-search';
					}

				$operations[$i] = array( 
						'id' => $i,
						'name' => $name,
						'icon' => $icon,
						);
				}
				$data['functionality'][] = array( 
					'id' => $dados['id'],
					'name' => $dados['descricao'],
					'operations' => $operations
				);
			}
			return $data;
		}else{
			return null;
		}
	}

	function selectGroupUser(){
		$data = '';
		$sql = mysql_query("SELECT * FROM grups_user");
		if($sql){
			while($dados = mysql_fetch_array($sql)){
				$data['grups_user'][] = array( 
					'id' => $dados['id'],
					'grupo' => $dados['descricao'],
					);
			}
			return $data;
		}else{
			return "Não consegui trazer à bagaça...";
		}
	}

	function InsertGroupUser($descricao){
		if($descricao){
			$query = mysql_query("INSERT INTO grups_user (descricao) VALUES ('$descricao')");
		}else{
			$query = false;
		}
		if($query){
			return selectGroupUser();
		}else{
			return null;
		}
	}

	function deleteGroupUser($id){
		$query = mysql_query("DELETE FROM grups_user WHERE id = '$id'");

		if($query){
			return selectGroupUser();
		}else{
			return null;
		}
	}

	function updateGroupUser($descricao, $id){
		$query = mysql_query("UPDATE grups_user SET descricao = '$descricao' WHERE id = '$id' ");
		if($query){
			return selectGroupUser();
		}else{
			return "Erro no engano desconhecido!";
		}
	}

	$action = isset($_GET['action'])? $_GET['action'] :false;

	$id = isset($_POST['id'])? $_POST['id'] :false;
	$descricao = isset($_POST['grupo'])? $_POST['grupo'] :false;
	switch ($action) {
		case 'insert': $return = InsertGroupUser($descricao); break;
		case 'update': $return = updateGroupUser($descricao, $id); break;
		case 'delete': $return = deleteGroupUser($id); break;
		case 'functionality': $return = functionality(); break;
		case 'buscar-users': $return = buscarUsers(); break;
		default: $return = selectGroupUser();
	}
	echo json_encode($return);
?>
