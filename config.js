var dominio = 'saga-web';
var host 	= 'http://10.100.10.161:8080';
//var host 	= 'http://10.100.10.97:8080';
var service = 'rest';

function getUrl(urlRequest){
	return host+'/'+dominio+'/'+service+'/'+urlRequest;
}