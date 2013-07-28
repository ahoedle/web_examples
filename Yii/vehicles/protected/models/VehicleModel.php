<?php

/**
 * This is the model class for table "{{vehicle_model}}".
 *
 * The followings are the available columns in table '{{vehicle_model}}':
 * @property integer $id
 * @property string $dvla_code
 * @property string $name
 * @property integer $vehicle_make_id
 *
 * The followings are the available model relations:
 * @property Vehicle[] $vehicles
 * @property VehicleMake $vehicleMake
 */
class VehicleModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VehicleModel the static model class
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
		return '{{vehicle_model}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dvla_code, name', 'required'),
			array('vehicle_make_id', 'numerical', 'integerOnly'=>true),
			array('dvla_code', 'length', 'max'=>5),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dvla_code, name, vehicle_make_id', 'safe', 'on'=>'search'),
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
			'vehicles' => array(self::HAS_MANY, 'Vehicle', 'vehicle_model_id'),
			'vehicleMake' => array(self::BELONGS_TO, 'VehicleMake', 'vehicle_make_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dvla_code' => 'Dvla Code',
			'name' => 'Name',
			'vehicle_make_id' => 'Vehicle Make',
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
		$criteria->compare('dvla_code',$this->dvla_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('vehicle_make_id',$this->vehicle_make_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}