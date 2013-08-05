<?php

class CourseController extends Controller
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
				'actions'=>array('create','update', 'dynamic', 'save', 'addTrainer'),
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
		$model=new Course;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Course']))
		{
	
			$model->attributes=$_POST['Course'];
			$model->course_id = $_POST['Course']['course_id'];
			
/*
			if ($_POST['Course']['lead_trainer'] == 0) {
				$model->lead_trainer = "";
				$model->trainer = "";
			} else {
			
					$course_given = new CourseGiven;
					$attributes = array('trainer_id' => $_POST['Course']['lead_trainer'],
										'course_id' => $_POST['Course']['course_id'],
										'is_lead_trainer' => true);
	
					$course_given->attributes = $attributes;
			
			
				if($course_given->save()) {

					if ($model->save()) {
						$this->redirect(array('view','id'=>$model->course_id));
					}				
				}
				
			}
*/
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->course_id));
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

		if(isset($_POST['Course']))
		{
			$model->attributes=$_POST['Course'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->course_id));
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
		$dataProvider=new CActiveDataProvider('Course');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Course('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Course']))
			$model->attributes=$_GET['Course'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Course the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Course::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Course $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='course-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	protected function modelToArray($model) {
	
/* 		$centrals = Central::model()->findAll(); */
		
		$modelArray = array();
		
		foreach($model as $m) {
			$modelArray[$m->id] = $m->name;
		}
		
		return $modelArray;
	}
	
	public function actionDynamic() {
	
		if (isset($_POST['Course']['center'])) {
/* 	    	echo CHtml::tag('input type="text"', array('value'=>$_POST['Course']['center'])); */
	    	
	    	echo CHtml::tag('div class="control-group"', array(), false, false);
	    	echo CHtml::tag('label class="control-label" for="Course_place"', array(), false, false);
	    	echo("</label>");
	    	echo CHtml::tag('div class="controls"', array(), false, false);
	    	echo CHtml::tag('input id="Course_place" type="text" maxlength="100" name="Course[place]"', array('value'=>$_POST['Course']['center']));

			echo("</input></div></div>");
	    	
		} else {
			var_dump($_POST);
/* 	    	echo CHtml::tag('input type="text"', array('value'=>$post)); */
		}
	
	}


/*
	public function actionSave() {
		$model = new Course;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['center']) && isset($_POST['place'])) {
			
			$model->center = $_POST['center'];
			$model->place = $_POST['place'];
			
			
			if($model->save()) {
				$this->redirect(array('view','id'=>$model->course_id));
			}
		}

		$this->render('create',array('model'=>$model,));
	}
*/
	
	protected function getTrainer() {
		$trainer = Trainer::model()->findAll();
		
		$trainerArray = array();
		
		foreach($trainer as $t) {
			$trainerArray[$t->trainer_id] = $t->last_name . ' ' . $t->first_name;
		}
		
		return $trainerArray;
	}
/*
	
	protected function getTrainerNames() {
		$trainer = Trainer::model()->findAll();
		
		$trainerNames = array();
		
		for ($i = 0; $i<count($trainer); $i++) {
			$trainerNames[$i] = $trainer->last_name . ' ' . $trainer->first_name;
		}
		
	}

*/

	public function actionAddTrainer($course_id) {

	}

}
