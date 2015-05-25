<?php

class CalculadorFrete 
{
	public $cep = '76450000';

	public function calcular($session)
	{
		$parametros = array();
		
		// Cуdigo e senha da empresa, se vocк tiver contrato com os correios, se nгo tiver deixe vazio.
		$parametros['nCdEmpresa'] = '';
		$parametros['sDsSenha'] = '';
		
		// CEP de origem e destino. Esse parametro precisa ser numйrico, sem "-" (hнfen) espaзos ou algo diferente de um nъmero.
		$parametros['sCepOrigem'] = '74230-025';
		$parametros['sCepDestino'] = $this->cep;
		
		// O peso do produto deverб ser enviado em quilogramas, leve em consideraзгo que isso deverб incluir o peso da embalagem.
		$parametros['nVlPeso'] = '1';
		
		// O formato tem apenas duas opзхes: 1 para caixa / pacote e 2 para rolo/prisma.
		$parametros['nCdFormato'] = '1';
		
		// O comprimento, altura, largura e diametro deverб ser informado em centнmetros e somente nъmeros
		$parametros['nVlComprimento'] = '16';
		$parametros['nVlAltura'] = '5';
		$parametros['nVlLargura'] = '15';
		$parametros['nVlDiametro'] = '0';
		
		// Aqui vocк informa se quer que a encomenda deva ser entregue somente para uma determinada pessoa apуs confirmaзгo por RG. Use "s" e "n".
		$parametros['sCdMaoPropria'] = 's';
		
		// O valor declarado serve para o caso de sua encomenda extraviar, entгo vocк poderб recuperar o valor dela. Vale lembrar que o valor da encomenda interfere no valor do frete. Se nгo quiser declarar pode passar 0 (zero).
		$parametros['nVlValorDeclarado'] = '200';
		
		// Se vocк quer ser avisado sobre a entrega da encomenda. Para nгo avisar use "n", para avisar use "s".
		$parametros['sCdAvisoRecebimento'] = 'n';
		
		// Formato no qual a consulta serб retornada, podendo ser: Popup – mostra uma janela pop-up | URL – envia os dados via post para a URL informada | XML – Retorna a resposta em XML
		$parametros['StrRetorno'] = 'xml';
		
		// Cуdigo do Serviзo, pode ser apenas um ou mais. Para mais de um apenas separe por virgula.
		$parametros['nCdServico'] = '40010,41106';
		
		
		$parametros = http_build_query($parametros);
		$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
		$curl = curl_init($url.'?'.$parametros);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$dados = curl_exec($curl);
		$dados = simplexml_load_string($dados);
		
		$resultado = null;
		$i = 0;
		foreach($dados->cServico as $linhas) {
			if($linhas->Erro == 0) {
				$session[0]->frete[$i] = json_encode(array(
					'codigo' => $linhas->Codigo,
					'valor'  => $linhas->Valor,
				    'prazo'  =>$linhas->PrazoEntrega));
				$i++;
			}else {
				//echo $linhas->MsgErro;
			}
		}
		return $session;
	}
}
?>