//Entrar no sitema 
$(document).ready(function() {	

	//Control view ---------------------------------------------------------------------------------------
	var dataPage = getCookies("token", true);
	if(dataPage && dataPage.length > 0){
		checkUserLogged(false);
	}

	$(".btn-login").click(function(e){ 
		e.preventDefault();
		onOffBottom(this, 'off');

		var login    = $("form.login-form input#username").val();
		var password = $("form.login-form input#password").val();
		var value    = '{"login":"'+login+'", "password":"'+password+'"}';
		var data = {"data":value}
		
		var proxy = "external-server/php/ApiProxy.php?rest=";
		//var url   = proxy+"http://lucweb.tempsite.ws/saga/json.php"; 
		//var url   = proxy+"http://lucweb.tempsite.ws/oficina/cadastra.php"; 
		var url = proxy+"http://10.100.10.161:8080/saga-web/rest/authenticate/login"

		authenticateLogin(url, data);
	});
});

function onOffBottom(element, action){
	if(action){
		$(element).attr("disabled", "disabled");
		$(element).text("loading...");
	}else{
		$(element).removeAttr("disabled", "disabled");
		$(element).text("Entrar");
	}
}