<?php

class EcoProdutosController extends Controller
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
				'actions'=>array('index','view', 'json'),
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
		if(isset($_GET['json'])){
			foreach ($this->loadModel($id) as $key => $value) {
						$dataValue[0][$key] = $value;
			}
			echo json_encode($dataValue);
			return;
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionJson(){

		$produtos=EcoProdutos::model()->findAllByAttributes(array('pro_status' => 1), array('order' => 'rand()'));

		for($i=0; $i < count($produtos); $i++) { 
			foreach ($produtos[$i] as $key => $val) {
						$dataValue[$i][$key] = $val;
			}
		}
		echo json_encode($dataValue);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EcoProdutos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EcoProdutos']))
		{
			$preco_de = substr($_POST['EcoProdutos']['pro_preco_de'], 3);
			$preco_de = str_replace('.', '', $preco_de);
			$_POST['EcoProdutos']['pro_preco_de'] = str_replace(',', '.', $preco_de);

			$preco_por = substr($_POST['EcoProdutos']['pro_preco_por'], 3);
			$preco_por = str_replace('.', '', $preco_por);
			$_POST['EcoProdutos']['pro_preco_por'] = str_replace(',', '.', $preco_por);

			
			$model->attributes=$_POST['EcoProdutos'];
			foreach ($_POST['EcoProdutos'] as $key => $value) {
				if(strpos($key,'pro_img_') !== false){
					$rnd = rand(0,9999);
					$uploadedFile[$key]=CUploadedFile::getInstance($model,$key);
		            if($uploadedFile[$key] != ''){
		            	$fileName[$key] = $rnd.'-'.$uploadedFile[$key];
		            	$model->$key = $fileName[$key];
		            }else{
		            	$model->$key = null;
		            }
		            
		        }
			}
			

			if($model->save())
				foreach ($fileName as $key => $value) {
						$uploadedFile[$key]->saveAs(Yii::app()->basePath.'/../../public/images/produtos/'.$value);
						chmod (Yii::app()->basePath.'/../../public/images/produtos/'.$value, 0755);
				}

				$this->redirect(array('view','id'=>$model->pro_id));
		
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




		if(isset($_POST['EcoProdutos']))
		{
			foreach ($_POST['EcoProdutos'] as $key => $value) {
				if(strpos($key,'pro_img_') !== false){

					$_POST['EcoProdutos'][$key] = $model->$key;
					$uploadedFile[$key]=CUploadedFile::getInstance($model,$key);

					if(!empty($uploadedFile[$key])){
						
						$uploadedFile[$key]=CUploadedFile::getInstance($model,$key);
						$ext = $uploadedFile[$key]->name;

						if(isset($model->$key)){
							if(substr($ext, -3) != substr($model->$key, -3)){
								$ext = substr($ext,(strlen($ext)-3),strlen($ext));

								unlink(Yii::app()->basePath.'/../../public/images/produtos/'.$model->$key);
								$model->$key = substr($model->$key, 0, -3).$ext;
							}
							$_POST['EcoProdutos'][$key] = $model->$key;
						}else{
							$_POST['EcoProdutos'][$key] = $uploadedFile[$key]->name;
						}	
					}else{
						$uploadedFile[$key]=null;
					}
				}
			}
			$model->attributes=$_POST['EcoProdutos'];
			if($model->save())
				foreach ($uploadedFile as $key => $value) {
					if($value){
						if(!empty($value))
		                {
		                    $value->saveAs(Yii::app()->basePath.'/../../public/images/produtos/'.$model->$key);
		                    chmod (Yii::app()->basePath.'/../../public/images/produtos/'.$model->$key, 0755);
		                }
	            	}
				}
				$this->redirect(array('view','id'=>$model->pro_id));
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
		foreach ($this->loadModel($id) as $key => $value) {
			if(strpos($key,'pro_img_') !== false && $value != ''){
				unlink(Yii::app()->basePath.'/../../public/images/produtos/'.$value);
			}
		}
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
		$dataProvider=new CActiveDataProvider('EcoProdutos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EcoProdutos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EcoProdutos']))
			$model->attributes=$_GET['EcoProdutos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EcoProdutos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EcoProdutos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EcoProdutos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='eco-produtos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
