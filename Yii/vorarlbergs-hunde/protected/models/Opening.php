<?php

/**
 * This is the model class for table "opening".
 *
 * The followings are the available columns in table 'opening':
 * @property integer $opening_id
 * @property integer $weekday
 * @property string $open1
 * @property string $close1
 * @property string $open2
 * @property string $close2
 * @property integer $vet_id
 *
 * The followings are the available model relations:
 * @property Vet $vet
 */
class Opening extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opening the static model class
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
		return 'opening';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vet_id', 'required'),
			array('weekday, vet_id', 'numerical', 'integerOnly'=>true),
			array('open1, close1, open2, close2', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('opening_id, weekday, open1, close1, open2, close2, vet_id', 'safe', 'on'=>'search'),
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
			'vet' => array(self::BELONGS_TO, 'Vet', 'vet_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'opening_id' => 'ID',
			'weekday' => 'Tag',
			'open1' => 'Open1',
			'close1' => 'Close1',
			'open2' => 'Open2',
			'close2' => 'Close2',
			'vet_id' => 'Vet',
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

		$criteria->compare('opening_id',$this->opening_id);
		$criteria->compare('weekday',$this->weekday);
		$criteria->compare('open1',$this->open1,true);
		$criteria->compare('close1',$this->close1,true);
		$criteria->compare('open2',$this->open2,true);
		$criteria->compare('close2',$this->close2,true);
		$criteria->compare('vet_id',$this->vet_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}