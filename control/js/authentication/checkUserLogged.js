//Checar usuário logado
function checkUserLogged(erro, msg, locat, token, redirect) {
	if(getCookies('token') && getCookies('token') != 'undefined' && !erro && token != 'null'){
		if(!token && token == 'undefined'){
			logoff(msg, redirect);
		}else{
			setUpdateCookies("token", token);
		}
		setUpdateCookies('url_history', new String(window.location).split('#')[1]);
		var url_history = getCookies('url_history');
		if(url_history || locat){
				locat = (!locat) ? '#'+url_history : '#'+locat;
				//errorReporting(1, msg);
				window.location.href = 'home.html'+locat;
		}else{	
				window.location.href = 'home.html';
		}
	}else{
		logoff(msg);
	}
}

function logoff(msg, redirect){
	errorReporting(0, msg);
	if(redirect){
		window.location.href = '#/login';
	}else{
		removeCookies("all");		
		if(msg){
			window.setTimeout(function() {
				window.location.href = 'index.htm';
			}, 3000);	
		}else{
			window.location.href = 'index.htm';
		}
	}
}