<?php

/**
 * This is the model class for table "Course".
 *
 * The followings are the available columns in table 'Course':
 * @property integer $course_id
 * @property string $name_full
 * @property string $name_short
 * @property string $start
 * @property string $end
 * @property string $place
 * @property string $description
 * @property integer $visible
 * @property integer $Coursetemplate_template_id
 *
 * The followings are the available model relations:
 * @property Coursetemplate $coursetemplateTemplate
 */
class Course extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Course the static model class
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
		return 'Course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Coursetemplate_template_id', 'required'),
			array('visible, Coursetemplate_template_id', 'numerical', 'integerOnly'=>true),
			array('name_full, place', 'length', 'max'=>100),
			array('name_short', 'length', 'max'=>45),
			array('description', 'length', 'max'=>500),
			array('start, end', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('course_id, name_full, name_short, start, end, place, description, visible, Coursetemplate_template_id', 'safe', 'on'=>'search'),
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
			'coursetemplateTemplate' => array(self::BELONGS_TO, 'Coursetemplate', 'Coursetemplate_template_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Course',
			'name_full' => 'Name Full',
			'name_short' => 'Name Short',
			'start' => 'Start',
			'end' => 'End',
			'place' => 'Place',
			'description' => 'Description',
			'visible' => 'Visible',
			'Coursetemplate_template_id' => 'Coursetemplate Template',
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

		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('name_full',$this->name_full,true);
		$criteria->compare('name_short',$this->name_short,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('Coursetemplate_template_id',$this->Coursetemplate_template_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}