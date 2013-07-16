<?php

class PageController extends Controller
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
		
			// allow all users to perform 'index' and 'view' actions
			array('allow',  
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		
			// only admin roles can create, update, delete and manage content
			array('allow', 
				'actions'=>array('create', 'update', 'delete', 'admin'),
				'roles' => array('admin'),
			),
		
			// author roles can create pages and update their own pages 
			array('allow', 
				'actions'=>array('create','update', 'myPages'),
				'roles'=>array('author'),
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
		if (Yii::app()->user->checkAccess('createPage')) {
			$model=new Page;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Page']))
			{
				$model->attributes=$_POST['Page'];
				$model->user_id = Yii::app()->user->id;
				
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}
	
			$this->render('create',array(
				'model'=>$model,
			));
		} else {
			throw new CHttpException(403, 'got net');
		}

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
		
		if (Yii::app()->user->checkAccess('updatePage') || Yii::app()->user->checkAccess('updateOwnPage', array('page_user_id' => $model->user_id))) {
			if(isset($_POST['Page']))
			{
				$model->attributes=$_POST['Page'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('update',array('model'=>$model,));
		} else {
			throw new CHttpException(403, 'You are not allowed to do this.');
		}


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
		$dataProvider=new CActiveDataProvider('Page');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Page('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Page']))
			$model->attributes=$_GET['Page'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Page the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Page::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Page $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='page-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function getComments($pageID) {
		$dataProvider=new CActiveDataProvider('Comment', array(
		    'criteria'=>array(
		        'condition'=>'page_id='.$pageID,
		        'with'=>array('page'),
		        'order' => 'date_entered DESC',
		    ),
/*
		    'pagination'=>array(
		        'pageSize'=>20,
		    ),
*/
		));
		
		return $dataProvider;		
	}
	
	public function actionMyPages() {
		$dataProvider=new CActiveDataProvider('Page', array(
		    'criteria'=>array(
		        'condition'=>'user_id='.Yii::app()->user->id,
		        'with'=>array('user'),
		    ),
		));
		$this->render('myPages',array('dataProvider'=>$dataProvider));
	}
	

}
