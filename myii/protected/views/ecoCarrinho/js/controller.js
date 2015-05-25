function addCarrinho(element, id)
{
	if($(element).val() > 0)
		window.location.href = '?r=ecoCarrinho/add&add='+id+'&qt='+$(element).val();
}

function finalizarCompra()
{
	var retorno = false;
	$('input[name="box_carrinho_tipo_entrega"]').each(function(){ 
		retorno = ($(this).context.checked) ? true : retorno;
	});
	if(!retorno)
	{
		$('.alert-error-cep').fadeIn();
		$('input[name="cep"]').css('border', '1px solid rgb(217, 83, 79)');
	}
	return retorno;
}