function objectVirgula(item, key){
	var keyValue = item.split(',');
	if(key){
		value = [];
		var i = 0;
		$.each(keyValue, function(k, val){
			value[key[i]] = val; 
			i++;
		});
		return value;
	}else{	
		return keyValue;
	}

}

$( document ).ready(function() { 
	$('.showHideCategoria').hover(function(){
		$(this).addClass("open");
	}, function() {
    	$(this).removeClass("open");
  	});
});

function calcularMoeda(item){
	valor = item.replace('R$ ', '');
	return valor.replace(',', '.');
}

function formatReal(mixed){
	var int = parseInt(mixed.toFixed(2).toString().replace(/[^\d]+/g, ''));
	var tmp = int + '';
	tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
	if (tmp.length > 6)
		tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
 
	return 'R$ '+tmp;
}

function converteDecimal(item){
	return item.substring(0, item.indexOf('.')+3);
}