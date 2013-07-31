<?php

/**
 * This is the model class for table "{{coursetemplate}}".
 *
 * The followings are the available columns in table '{{coursetemplate}}':
 * @property integer $template_id
 * @property string $category1
 * @property string $category2
 * @property string $type
 * @property string $title
 * @property string $requirement
 * @property string $content
 * @property string $description
 * @property string $duration
 * @property string $ue
 * @property integer $min_participants
 * @property integer $max_participants
 * @property integer $price
 * @property string $class_time
 * @property string $graduation
 * @property string $statistics
 */
class Coursetemplate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Coursetemplate the static model class
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
		return '{{coursetemplate}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('min_participants, max_participants, price', 'numerical', 'integerOnly'=>true),
			array('category1, category2, type, title, duration, ue, class_time, graduation, statistics', 'length', 'max'=>100),
			array('requirement, content, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('template_id, category1, category2, type, title, requirement, content, description, duration, ue, min_participants, max_participants, price, class_time, graduation, statistics', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'template_id' => 'Template',
			'category1' => 'Category1',
			'category2' => 'Category2',
			'type' => 'Type',
			'title' => 'Title',
			'requirement' => 'Requirement',
			'content' => 'Content',
			'description' => 'Description',
			'duration' => 'Duration',
			'ue' => 'Ue',
			'min_participants' => 'Min Participants',
			'max_participants' => 'Max Participants',
			'price' => 'Price',
			'class_time' => 'Class Time',
			'graduation' => 'Graduation',
			'statistics' => 'Statistics',
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

		$criteria->compare('template_id',$this->template_id);
		$criteria->compare('category1',$this->category1,true);
		$criteria->compare('category2',$this->category2,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('requirement',$this->requirement,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('ue',$this->ue,true);
		$criteria->compare('min_participants',$this->min_participants);
		$criteria->compare('max_participants',$this->max_participants);
		$criteria->compare('price',$this->price);
		$criteria->compare('class_time',$this->class_time,true);
		$criteria->compare('graduation',$this->graduation,true);
		$criteria->compare('statistics',$this->statistics,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}