<?php

/**
 * This is the model class for table "sing_course".
 *
 * The followings are the available columns in table 'sing_course':
 * @property integer $course_id
 * @property string $course_nr
 * @property string $center
 * @property string $category1
 * @property string $category2
 * @property string $type
 * @property string $title
 * @property string $requirement
 * @property string $content
 * @property string $description
 * @property string $place
 * @property string $start
 * @property string $end
 * @property string $expiry
 * @property string $status
 * @property string $duration
 * @property string $ue
 * @property integer $min_participants
 * @property integer $max_participants
 * @property integer $price
 * @property string $class_time
 * @property string $graduation
 * @property string $statistics
 * @property integer $lead_trainer
 * @property integer $trainer
 * @property integer $master_course_id
 *
 * The followings are the available model relations:
 * @property SingCourseGiven $leadTrainer
 * @property SingCourseGiven $trainer0
 * @property SingMasterCourse $masterCourse
 * @property SingCourseGiven[] $singCourseGivens
 * @property SingCourseTaken[] $singCourseTakens
 * @property SingUser[] $singUsers
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
		return 'sing_course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id', 'required'),
			array('course_id, min_participants, max_participants, price, lead_trainer, trainer, master_course_id', 'numerical', 'integerOnly'=>true),
			array('course_nr, center, start, end, expiry', 'length', 'max'=>20),
			array('category1, category2, type, title, place, status, duration, ue, class_time, graduation, statistics', 'length', 'max'=>100),
			array('requirement, content, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('course_id, course_nr, center, category1, category2, type, title, requirement, content, description, place, start, end, expiry, status, duration, ue, min_participants, max_participants, price, class_time, graduation, statistics, lead_trainer, trainer, master_course_id', 'safe', 'on'=>'search'),
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
			'leadTrainer' => array(self::BELONGS_TO, 'SingCourseGiven', 'lead_trainer'),
			'trainer0' => array(self::BELONGS_TO, 'SingCourseGiven', 'trainer'),
			'masterCourse' => array(self::BELONGS_TO, 'SingMasterCourse', 'master_course_id'),
			'singCourseGivens' => array(self::HAS_MANY, 'SingCourseGiven', 'course_id'),
			'singCourseTakens' => array(self::HAS_MANY, 'SingCourseTaken', 'course_id'),
			'singUsers' => array(self::HAS_MANY, 'SingUser', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Course',
			'course_nr' => 'Course Nr',
			'center' => 'Center',
			'category1' => 'Category1',
			'category2' => 'Category2',
			'type' => 'Type',
			'title' => 'Title',
			'requirement' => 'Requirement',
			'content' => 'Content',
			'description' => 'Description',
			'place' => 'Place',
			'start' => 'Start',
			'end' => 'End',
			'expiry' => 'Expiry',
			'status' => 'Status',
			'duration' => 'Duration',
			'ue' => 'Ue',
			'min_participants' => 'Min Participants',
			'max_participants' => 'Max Participants',
			'price' => 'Price',
			'class_time' => 'Class Time',
			'graduation' => 'Graduation',
			'statistics' => 'Statistics',
			'lead_trainer' => 'Lead Trainer',
			'trainer' => 'Trainer',
			'master_course_id' => 'Master Course',
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
		$criteria->compare('course_nr',$this->course_nr,true);
		$criteria->compare('center',$this->center,true);
		$criteria->compare('category1',$this->category1,true);
		$criteria->compare('category2',$this->category2,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('requirement',$this->requirement,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('expiry',$this->expiry,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('ue',$this->ue,true);
		$criteria->compare('min_participants',$this->min_participants);
		$criteria->compare('max_participants',$this->max_participants);
		$criteria->compare('price',$this->price);
		$criteria->compare('class_time',$this->class_time,true);
		$criteria->compare('graduation',$this->graduation,true);
		$criteria->compare('statistics',$this->statistics,true);
		$criteria->compare('lead_trainer',$this->lead_trainer);
		$criteria->compare('trainer',$this->trainer);
		$criteria->compare('master_course_id',$this->master_course_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}