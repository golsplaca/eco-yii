<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class EcoCarrinho extends CFormModel
{
	public $carrinho;

	/**
	 * Declares the validation rules.
	 */
	// public function rules()
	// {
	// 	return array(
	// 		// name, email, subject and body are required
	// 		//array('name, email, subject, body', 'required'),
	// 		// email has to be a valid email address
	// 		//array('email', 'email'),
	// 		// verifyCode needs to be entered correctly
	// 		//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
	// 	);
	// }

	public function addCarrinho()
	{
		$result = false;
		$produto = EcoProdutos::model()->findbypk($_GET['add']);
		$produto->params['preco'] = $produto->pro_preco_por * $produto->params['qt'];
		if($this->carrinho){
			foreach ($this->carrinho as $k => $v) {
				if($v->pro_id == $produto->pro_id){
					if(isset($_GET['qt'])){
						$this->carrinho[$k]->params['qt'] = $_GET['qt'];
						$this->carrinho[$k]->params['preco'] = $v->pro_preco_por * $_GET['qt'];
					}
					$result = true;
				}
			}
		}


		if(!$result)
			$this->carrinho[] = $produto; 
		$_SESSION['EcoCarrinho'] = $this->carrinho;
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	// public function attributeLabels()
	// {
	// 	return array(
	// 		// 'verifyCode'=>'Codído de verificação',
	// 		// 'name'=>'Nome',
	// 		// 'email'=>'Email',
	// 		// 'subject'=>'Assunto',
	// 		// 'body'=>'Messagem',
	// 	);
	// }
}