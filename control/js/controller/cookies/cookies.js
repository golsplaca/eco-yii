function getCookies(key, json){
	var keyValue = document.cookie.split(';');
	for(var i = 0; i < keyValue.length; i++) {
	    var name = keyValue[i].substring(0, keyValue[i].indexOf('='));
	    var value = keyValue[i].substring(keyValue[i].indexOf('=')+1);	
	    if(key.trim() == name.trim()){
	    	if(value != 'undefined'){
	    		if(json){
	    			try{
	 	   				return $.parseJSON(value);
	 	   			}catch(error){
	 	   				return null;
	 	   			}
	 	   		}else{
	 	   			return value;
	 	   		}
	 	   	}
		}
	}
	return null;
}

function setUpdateCookies(key, value){
	document.cookie = key+"="+value;
}

function removeCookies(key){
	setUpdateCookies('url_history', new String(window.location).split('#')[1]);
	if(key == 'all'){
		var keyValue = document.cookie.split(';');
		for(var i = 0; i < keyValue.length; i++) {
		    var name = keyValue[i].substring(0, keyValue[i].indexOf('='));
		    if('url_history' != name.trim()){
				document.cookie = name+"=";
			}
		}	   
	}else{
		document.cookie = key+"=";
	}	
}