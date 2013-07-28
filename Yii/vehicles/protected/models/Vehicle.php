<?php

/**
 * This is the model class for table "{{vehicle}}".
 *
 * The followings are the available columns in table '{{vehicle}}':
 * @property integer $id
 * @property string $registration_number
 * @property string $chassis_number
 * @property integer $vehicle_make_id
 * @property integer $vehicle_model_id
 * @property integer $vehicle_colour_id
 *
 * The followings are the available model relations:
 * @property VehicleColour $vehicleColour
 * @property VehicleMake $vehicleMake
 * @property VehicleModel $vehicleModel
 * @property VehicleColour $id0
 */
class Vehicle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vehicle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{vehicle}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vehicle_make_id, vehicle_model_id, vehicle_colour_id', 'numerical', 'integerOnly'=>true),
			array('registration_number, chassis_number', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, registration_number, chassis_number, vehicle_make_id, vehicle_model_id, vehicle_colour_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'vehicleColour' => array(self::BELONGS_TO, 'VehicleColour', 'vehicle_colour_id'),
			'vehicleMake' => array(self::BELONGS_TO, 'VehicleMake', 'vehicle_make_id'),
			'vehicleModel' => array(self::BELONGS_TO, 'VehicleModel', 'vehicle_model_id'),
			'id0' => array(self::BELONGS_TO, 'VehicleColour', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'registration_number' => 'Registration Number',
			'chassis_number' => 'Chassis Number',
			'vehicle_make_id' => 'Vehicle Make',
			'vehicle_model_id' => 'Vehicle Model',
			'vehicle_colour_id' => 'Vehicle Colour',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('registration_number',$this->registration_number,true);
		$criteria->compare('chassis_number',$this->chassis_number,true);
		$criteria->compare('vehicle_make_id',$this->vehicle_make_id);
		$criteria->compare('vehicle_model_id',$this->vehicle_model_id);
		$criteria->compare('vehicle_colour_id',$this->vehicle_colour_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}