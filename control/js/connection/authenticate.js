function authenticateLogin(url, data){
	$.post(url, data)
		.done(function(data){
			try {     
					setUpdateCookies("dataUser", JSON.stringify(data['data'].name));
					setUpdateCookies("token", data['token']);
					checkUserLogged(false, false, false, getCookies('token'));
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