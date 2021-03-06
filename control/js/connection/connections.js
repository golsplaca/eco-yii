function connection(url, data, location, $scope, cfpLoadingBar, scope){
/* Exemples
	var proxy = "library/php/ApiProxy.php?rest=";
	var url   = proxy+"http://localhost/angular-js/arquivos-teste/cadastra.php"; 

	var data = {"data": '{"name":"lucas"}' };
	params = array() do tipo post, exemplo: &rest=ulr&id=0;
*/
		var proxy = "external-server/php/ApiProxy.php?rest=";
		//var url    = proxy+"http://lucweb.tempsite.ws/oficina/index.php"; 	
		url = proxy+url;
		var params = {}; 
   		params = data;
   	
   	$.post(url, params)
		.done(function(data){

			switch(data['returnCode']){
				case 0:
					scopeController($scope, data, location, scope);
					try{
		  				$scope.ctrlSuccess(scope);
		  			}catch(e){}
					break;
				case 1:
					errorReporting(1, data['data'].message);
					try{
		  				$scope.ctrlSuccess(scope);
		  			}catch(e){}
					break;
				default:
					errorReporting(0, data['data'].message);
			}

			console.log(data);
			cfpLoadingBar.complete();
  		})
        .fail(function(data){
        	console.log(data);
		    errorReporting(0, "Requisição desconhecida, por favor tente novamente! url: "+url);
			cfpLoadingBar.complete();
  			$(".contentNgView").fadeIn(1000);
  			try{
  				$scope.ctrlErro("Erro!");
  			}catch(e){}
	    });
}