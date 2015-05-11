function addCarrinho(element, id)
{

	if($(element).val() > 0)
		window.location.href = '?r=ecoCarrinho/add&add='+id+'&qt='+$(element).val();
}