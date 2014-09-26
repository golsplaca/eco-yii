function authenticateLogin(url, data){
/* Exemples
	var proxy = "library/php/ApiProxy.php?rest=";
	var url   = proxy+"http://localhost/angular-js/arquivos-teste/cadastra.php"; 

	var data = {"data": '{"name":"lucas"}' };
*/
	$.post(url, data)
		.done(function(data){
			console.log(data);
			try {     
				switch(data['returnCode']){
					case 0: 
					case 1:
						setUpdateCookies("menu", {"menu":"name"});
						setUpdateCookies("menuHorizontal", JSON.stringify(data['data']['menus'][0]['itensMenu']));
						setUpdateCookies("dataUser", JSON.stringify(data['data'].name));
						setUpdateCookies("token", data['token']);
						checkUserLogged(false, false, false, getCookies('token'));
					break;
					case 2: 
					case 3: 
					case 4: 
					case 5: 
					case 6: 
						onOffBottom(".btn-login");
						errorReporting(0, data['data'].message);
					break;
					case 7:
					case 8:
					case 9:
					case 10:
						onOffBottom(".btn-login");
						errorReporting(0, data['data'].message);
					break;
					default: 
					onOffBottom(".btn-login");
					errorReporting(0, "Ocorreu um erro inesperado por favor tente novamente, erro: "+data['data'].message);
	  			}
  		    }catch(err) {
				onOffBottom(".btn-login");
		      	errorReporting(0, "Ocorreu um erro inesperado por favor tente novamente! error:"+data['data'].message + ' Exeption:' +err.message)
    		}
  		})
        .fail(function(){
        	onOffBottom(".btn-login");
		    errorReporting(0, "Erro de conexão, por favor tente novamente.");
	    });
}