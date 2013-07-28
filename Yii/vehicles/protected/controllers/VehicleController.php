<?php

class VehicleController extends Controller
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

			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view', 'admin', 'create', 'update', 'hpicheck'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'expression' => 'Yii::app()->getModule(\'user\')->isAdmin()',
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
		$model=new Vehicle;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Vehicle']))
		{
			$model->attributes=$_POST['Vehicle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Vehicle']))
		{
			$model->attributes=$_POST['Vehicle'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Vehicle');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Vehicle('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Vehicle']))
			$model->attributes=$_GET['Vehicle'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Vehicle the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Vehicle::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Vehicle $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='vehicle-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionHpiCheck() {
        if (Yii::app()->request->isAjaxRequest) {
 
            // get the parameter passed via ajax from the _form.php
            $registration_number = Yii::app()->request->getParam('registration_number');
 
            if ($registration_number == '')
            {
                // No registration number has been entered so send the error back to the form
                echo CJSON::encode(array(
                    'error' => 'true',
                    'status' => 'HPI check failed, please enter a registration number '
                ));
                // exit;
                Yii::app()->end();
            }
            else
            {
                // Create the options for SOAP
                $options = array(
                    'soap_version' => SOAP_1_2,
                    'exceptions' => true,
                    'trace' => 1,
                );
 
                // Create the parameters to be passed to the enquire() function
                $params->Request->Asset->Vrm = $registration_number;
				
				// url for the soap service
                $url = 'http://soapurl.com';
 
                try {
 
                    // Open a soap client
                    $soapClient = new SoapClient($url, $options);
 
                    // call the soap service's function with the parameters
                    // returns an object with additional vehicle details
                    $hpi = $soapClient->enquire($params);
 
                    // the enquire() function is provided by the vehicle checking company - it isn't a soap function.
                    // To get a list of available functions, use var_dump($soapClient->__getFunctions());
 
                    // Set the status to blank, this is for recording any errors
                    $status = '';
 
                    // Get the make code and description from the $hpi object
                    $makeCode = $hpi->RequestResults->Asset->PrimaryAssetData->DVLA->Make->Code;
                    $makeDescription = $hpi->RequestResults->Asset->PrimaryAssetData->DVLA->Make->Description;
 
                    // Create blank variables just in case...
                    $makeOption = '';
                    $make_id=0;
 
                    // Have a look to see if the makeCode exists in the VehicleMake table
                    $make = VehicleMake::model()->find('dvla_code=:dvla_code', array(':dvla_code' => $makeCode));
 
                    if ($make == null) {
                        // It doesn't exist so create it
                        try 
                        {
                            $make = new VehicleMake;
                            $make->dvla_code = $makeCode;
                            $make->name = $makeDescription;
                            $make->save();
 
                            $make_id = $make->id;
                            $makeOption = CHtml::tag('option', array('value' => $make_id),
                                        CHtml::encode($makeDescription), true);
 
                        } 
                        catch (Exception $e) 
                        {
                            // This will catch any database errors, duplicates for example
                            Yii::log($e->getMessage());
                            $status .= $e->getMessage() . '<br/>';
 
                            // Send the error back to the form
                            echo CJSON::encode(array(
                                'error' => 'true',
                                'status' => $status,
                            ));
 
                            // exit;
                            Yii::app()->end();
                        }
                    } 
                    else 
                    {
                        // We have found the make, so get the id
                        $make_id = $make->id;
                    }    
 
                    // repeat the above code for VehicleModel and VehicleColour
                    // At some stage I'll create a generic function
                    //...
 
 
                    if ($status=='')
                    {
                        // blank status so all is well
                        $status = 'HPI check complete';
                    }
 
                    // Pass our data back to the _form.php via json
                    echo CJSON::encode(array(
                        'error' => 'false',
                        'status' => $status,
                        'colour_id' => $colour_id,
                        'colourOption' => $colourOption,
                        'make_id' => $make_id,
                        'makeOption' => $makeOption,
                        'model_id' => $model_id,
                        'modelOption' => $modelOption,
                    ));
 
                    // exit;
                    Yii::app()->end();
                } 
                catch (SoapFault $soapFault) 
                {
                    // Theres a problem with SOAP 
                    // or the enquire() function threw an error, an invalid registration number for example
                    $status = 'HPI Error : ' . substr($soapFault->faultcode, strlen('soapenv:'));
                    $status .= ' (' . $soapFault->detail->HpiSoapFault->Error->Code . ') ';
                    $status .= $soapFault->detail->HpiSoapFault->Error->Description . '<br/>';
 
                    echo CJSON::encode(array(
                        'error' => 'true',
                        'status' => $status,
                    ));
 
                    // exit;
                    Yii::app()->end();
			}
		}
	}
}
}