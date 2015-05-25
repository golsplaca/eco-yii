<?php

class EcoFaturaController extends Controller
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
				'actions'=>array('index','view'),
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

	public function actionCielo(){
		$data_cielo['CART_1_NAME'] = "Bermuda";
		$data_cielo['CART_1_DESCRIPTION'] = "";
		$data_cielo['CART_1_UNITPRICE'] = "9500";
		$data_cielo['CART_1_QUANTITY'] = "1";
		$data_cielo['CART_1_TYPE'] = "1";
		$data_cielo['CART_1_CODE'] = "9100012";
		$data_cielo['CART_1_WEIGHT'] = "500"; 
		$data_cielo['CART_1_ZIPCODE'] = "220080-120";
		$data_cielo['CART_2_NAME'] = "Blusa";
		$data_cielo['CART_2_DESCRIPTION'] = "";
		$data_cielo['CART_2_UNITPRICE'] = "8000";
		$data_cielo['CART_2_QUANTITY'] = "1";
		$data_cielo['CART_2_TYPE'] = "1";
		$data_cielo['CART_2_CODE'] = "9100013";
		$data_cielo['CART_2_WEIGHT'] = "300";
		$data_cielo['CART_2_ZIPCODE'] = "220080-120";
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
		$model=new EcoFatura;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EcoFatura']))
		{

			$_POST['EcoFatura']['fat_codigo'] = rand(0, 99999); 
			$_POST['EcoFatura']['fat_data'] = date('Y-m-d'); 

			$model->attributes=$_POST['EcoFatura'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->fat_id));
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

		if(isset($_POST['EcoFatura']))
		{
			$model->attributes=$_POST['EcoFatura'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->fat_id));
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
		$dataProvider=new CActiveDataProvider('EcoFatura');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EcoFatura('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EcoFatura']))
			$model->attributes=$_GET['EcoFatura'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EcoFatura the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EcoFatura::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EcoFatura $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='eco-fatura-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
