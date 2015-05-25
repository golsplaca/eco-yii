<?php

class EcoCarrinhoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'calcularFrete', 'view','json', 'add', 'remove'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionIndex()
	{	
		$_SESSION['cep'] = null;
		$frete = null;
		if(isset($_POST['cep'])){
			$calcularFrete = new CalculadorFrete();
			$_SESSION['EcoCarrinho'][0]->cep = $_POST['cep'];
			$_SESSION['cep'] = $calcularFrete->cep;
			if(isset($_SESSION['EcoCarrinho'][0])){
				$_SESSION['EcoCarrinho'] = $calcularFrete->calcular($_SESSION['EcoCarrinho']);
			}
		}
		$_SESSION['EcoCarrinho'] = isset($_SESSION['EcoCarrinho'][0])?$_SESSION['EcoCarrinho']:null;

		if(count($_SESSION['EcoCarrinho']) < 1){
			$this->render('s_produto',array(
				'model'=>$_SESSION['EcoCarrinho'],
				'categorias'=>EcoCategoria::model()->findAll(),
				'colecoes'=>EcoColecoes::model()->findAll(),
				'frete'=> $frete,
			));

			exit;	
		}

		$this->render('index',array(
			'model'=>$_SESSION['EcoCarrinho'],
			'categorias'=>EcoCategoria::model()->findAll(),
			'frete'=> $frete,
		));
	}

	public function actionAdd()
	{   
		$model = new EcoCarrinho();
		if(isset($_SESSION['EcoCarrinho']))
			$model->carrinho = $_SESSION['EcoCarrinho'];
		if(isset($_GET['add']))
			$model->addCarrinho();
		$this->redirect(array('index'));
	}
	public function actionRemove()
	{   
		$model = new EcoCarrinho();
		if(isset($_GET['remove']))
			unset($_SESSION['EcoCarrinho'][$_GET['remove']]);
		$model->carrinho = $_SESSION['EcoCarrinho'];
		$this->redirect(array('index'));
	}
	public function actionCalcularFrete()
	{   
		$frete = new CalculadorFrete();
		$frete->cep = '76450000';
		echo json_encode($frete->calcular());
		// echo $linhas->Codigo.'</br>';
				// echo $linhas->Valor .'</br>';
				// echo $linhas->PrazoEntrega.' Dias </br>';
	}
}
