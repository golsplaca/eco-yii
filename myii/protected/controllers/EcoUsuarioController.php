<?php

class EcoUsuarioController extends Controller
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
				'actions'=>array('index','view', 'logar'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EcoUsuario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EcoUsuario']))
		{	
			$_POST['EcoUsuario']['usu_senha'] =  md5($_POST['EcoUsuario']['usu_senha']);
			$model->attributes=$_POST['EcoUsuario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->usu_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EcoUsuario']))
		{
			$model->attributes=$_POST['EcoUsuario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->usu_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EcoUsuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionLogar(){

		if(isset($_POST['nome'])){
			$login = $_POST['nome'];
			$senha = md5($_POST['senha']);
			$data = EcoUsuario::model()->findAll(array("condition"=>"usu_login =  '$login' and usu_senha = '$senha'"));

			if($data){

				if($data[0]['usu_nivel'] != "inativo"){
					$model=new LoginForm;

					$model->attributes= array('username' => $data[0]['usu_nivel'], 'password' => $data[0]['usu_nivel']);
					
					if($model->validate() && $model->login())
						foreach ($data[0] as $key => $value) {
							if($key != "usu_senha"){
								$dataValue[$key] = $value;
							}
						}
						$_SESSION['dataUser'] = $dataValue;
						echo json_encode($dataValue);
				}else{
					echo 2; //Usuário bloqueado!
				}
			}else{
				echo 0; //Palavra passe ou senha está incorreta!
			}
		}else{
			echo 3; //não existe 
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EcoUsuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EcoUsuario']))
			$model->attributes=$_GET['EcoUsuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EcoUsuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EcoUsuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EcoUsuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='eco-usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
