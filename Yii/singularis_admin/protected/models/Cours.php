<?php

/**
 * This is the model class for table "Course".
 *
 * The followings are the available columns in table 'Course':
 * @property integer $course_id
 * @property string $name_full
 * @property string $start
 * @property string $end
 * @property string $place
 * @property string $description
 * @property integer $visible
 * @property string $course_nr
 * @property string $category1
 * @property string $category2
 * @property string $type
 * @property string $requirement
 * @property string $content
 * @property string $center
 * @property string $status
 * @property string $expiry
 * @property string $duration
 * @property string $ue
 * @property integer $min_participants
 * @property integer $max_participants
 * @property integer $price
 * @property string $class_time
 * @property string $graduation
 * @property string $statistics
 * @property string $invoice
 * @property string $link
 * @property integer $lead_trainer
 * @property string $trainer
 *
 * The followings are the available model relations:
 * @property Cours $leadTrainer
 * @property Cours[] $courses
 * @property User[] $users
 * @property CourseGiven[] $courseGivens
 * @property CourseTaken[] $courseTakens
 */
class Cours extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cours the static model class
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
			array('visible, min_participants, max_participants, price, lead_trainer', 'numerical', 'integerOnly'=>true),
			array('name_full, place, category1, category2, type, status, expiry, duration, ue, class_time, graduation, statistics, invoice, link, trainer', 'length', 'max'=>100),
			array('start, end, course_nr', 'length', 'max'=>20),
			array('description', 'length', 'max'=>500),
			array('requirement, content', 'length', 'max'=>1000),
			array('center', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('course_id, name_full, start, end, place, description, visible, course_nr, category1, category2, type, requirement, content, center, status, expiry, duration, ue, min_participants, max_participants, price, class_time, graduation, statistics, invoice, link, lead_trainer, trainer', 'safe', 'on'=>'search'),
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
			'leadTrainer' => array(self::BELONGS_TO, 'Cours', 'lead_trainer'),
			'courses' => array(self::HAS_MANY, 'Cours', 'lead_trainer'),
			'users' => array(self::HAS_MANY, 'User', 'course_id'),
			'courseGivens' => array(self::HAS_MANY, 'CourseGiven', 'course_id'),
			'courseTakens' => array(self::HAS_MANY, 'CourseTaken', 'course_id'),
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
			'start' => 'Start',
			'end' => 'End',
			'place' => 'Place',
			'description' => 'Description',
			'visible' => 'Visible',
			'course_nr' => 'Course Nr',
			'category1' => 'Category1',
			'category2' => 'Category2',
			'type' => 'Type',
			'requirement' => 'Requirement',
			'content' => 'Content',
			'center' => 'Center',
			'status' => 'Status',
			'expiry' => 'Expiry',
			'duration' => 'Duration',
			'ue' => 'Ue',
			'min_participants' => 'Min Participants',
			'max_participants' => 'Max Participants',
			'price' => 'Price',
			'class_time' => 'Class Time',
			'graduation' => 'Graduation',
			'statistics' => 'Statistics',
			'invoice' => 'Invoice',
			'link' => 'Link',
			'lead_trainer' => 'Lead Trainer',
			'trainer' => 'Trainer',
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
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('course_nr',$this->course_nr,true);
		$criteria->compare('category1',$this->category1,true);
		$criteria->compare('category2',$this->category2,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('requirement',$this->requirement,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('center',$this->center,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('expiry',$this->expiry,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('ue',$this->ue,true);
		$criteria->compare('min_participants',$this->min_participants);
		$criteria->compare('max_participants',$this->max_participants);
		$criteria->compare('price',$this->price);
		$criteria->compare('class_time',$this->class_time,true);
		$criteria->compare('graduation',$this->graduation,true);
		$criteria->compare('statistics',$this->statistics,true);
		$criteria->compare('invoice',$this->invoice,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('lead_trainer',$this->lead_trainer);
		$criteria->compare('trainer',$this->trainer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}