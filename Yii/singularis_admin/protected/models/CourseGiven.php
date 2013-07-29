<?php

/**
 * This is the model class for table "course_given".
 *
 * The followings are the available columns in table 'course_given':
 * @property integer $trainer_id
 * @property integer $course_id
 *
 * The followings are the available model relations:
 * @property Trainer $trainer
 * @property Course $course
 */
class CourseGiven extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CourseGiven the static model class
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
		return 'course_given';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trainer_id, course_id', 'required'),
			array('trainer_id, course_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trainer_id, course_id', 'safe', 'on'=>'search'),
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
			'trainer' => array(self::BELONGS_TO, 'Trainer', 'trainer_id'),
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trainer_id' => 'Trainer',
			'course_id' => 'Course',
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

		$criteria->compare('trainer_id',$this->trainer_id);
		$criteria->compare('course_id',$this->course_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}