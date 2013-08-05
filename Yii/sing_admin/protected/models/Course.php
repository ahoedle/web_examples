<?php

/**
 * This is the model class for table "{{course}}".
 *
 * The followings are the available columns in table '{{course}}':
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
 * @property CourseGiven $trainer0
 * @property MasterCourse $masterCourse
 * @property CourseGiven $leadTrainer
 * @property CourseGiven[] $courseGivens
 * @property CourseTaken[] $courseTakens
 * @property User[] $users
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
		return '{{course}}';
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
			'trainer0' => array(self::BELONGS_TO, 'CourseGiven', 'trainer'),
			'masterCourse' => array(self::BELONGS_TO, 'MasterCourse', 'master_course_id'),
			'leadTrainer' => array(self::BELONGS_TO, 'CourseGiven', 'lead_trainer'),
			'courseGivens' => array(self::HAS_MANY, 'CourseGiven', 'course_id'),
			'courseTakens' => array(self::HAS_MANY, 'CourseTaken', 'course_id'),
			'users' => array(self::HAS_MANY, 'User', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Course',
			'course_nr' => 'Kurs-Nr',
			'center' => 'Zentrale',
			'category1' => 'Kategorie',
			'category2' => 'Zweite Kategorie',
			'type' => 'Art',
			'title' => 'Titel',
			'requirement' => 'Voraussetzung',
			'content' => 'Inhalt',
			'description' => 'Beschreibung',
			'place' => 'Ort',
			'start' => 'Beginn',
			'end' => 'Ende',
			'expiry' => 'Ablaufdatum (für elearning)',
			'status' => 'Status',
			'duration' => 'Dauer',
			'ue' => 'UE',
			'min_participants' => 'Min. Teilnehmer',
			'max_participants' => 'Max. Teilnehmer',
			'price' => 'Preis',
			'class_time' => 'Unterrichtszeit',
			'graduation' => 'Abschluss',
			'statistics' => 'Erwachsenenbildung',
			'lead_trainer' => 'Haupttrainer',
			'trainer' => 'Weitere Trainer',
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