function automaticInclude($scope){
	var strPage  = getCookies('page', true);
	var keyUrl	= new String(window.location).split('#')[1];
	var strUrl 	=  null;
	if(keyUrl != '/' && keyUrl){ 
		if(keyUrl.length > 1){

			var keyUrl 	= keyUrl.substring(1);
			$.each(strPage, function(i, item) {
				if(keyUrl == item.key){
					strUrl = item.url+".";
				}
			});

			var n 		= strUrl.indexOf("/");
			var qt 		= strUrl.indexOf(".");
			var paste 	= strUrl.substring(0, n);
			var fileCss	= "view/modulos/"+paste+"/css/"+strUrl.substring(n + 1, qt)+".css";
			var fileJs	= "view/modulos/"+paste+"/js/"+strUrl.substring(n + 1, qt)+".js";

			if(velidateFile(fileCss)){
				useCss('.contentNgView', fileCss);
			}

			if(velidateFile(fileJs)){
				useJs('.contentNgView', fileJs);
				scopeMain($scope);
			}
		}
	}
}

function velidateFile(file){
	try{
		file = file.trim();
		var request = $.ajax({
			url: file,
			type: 'HEAD',
			async: false
		}).status;
		return (request != '200')? false : true ;
	}catch(e){
		return false;
	}	
}	