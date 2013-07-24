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
 *
 * The followings are the available model relations:
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
			array('visible, min_participants, max_participants, price', 'numerical', 'integerOnly'=>true),
			array('name_full, place, category1, category2, type, status, expiry, duration, ue, class_time, graduation, statistics, invoice, link', 'length', 'max'=>100),
			array('start, end, course_nr', 'length', 'max'=>20),
			array('description', 'length', 'max'=>500),
			array('requirement, content', 'length', 'max'=>1000),
			array('center', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('course_id, name_full, start, end, place, description, visible, course_nr, category1, category2, type, requirement, content, center, status, expiry, duration, ue, min_participants, max_participants, price, class_time, graduation, statistics, invoice, link', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => 'Kurs ID',
			'name_full' => 'Titel',
			'start' => 'Beginn',
			'end' => 'Ende',
			'place' => 'Ort',
			'description' => 'Beschreibung',
			'visible' => 'Visible',
			'course_nr' => 'Kurs-Nr',
			'category1' => 'Kategorie',
			'category2' => 'Zweite Kategorie',
			'type' => 'Art',
			'requirement' => 'Voraussetzung',
			'content' => 'Inhalt',
			'center' => 'Zentrale',
			'status' => 'Absage/Interner Status',
			'expiry' => 'Ablaufdatum (für elearning)',
			'duration' => 'Dauer',
			'ue' => 'UE',
			'min_participants' => 'Min. Teilnehmer',
			'max_participants' => 'Max. Teilnehmer',
			'price' => 'Preis',
			'class_time' => 'Unterrichtszeit',
			'graduation' => 'Abschluss',
			'statistics' => 'Erwachsenenbildung - Statistik',
			'invoice' => 'Rechnungsfreigabe durch',
			'link' => 'Weiterer Link',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}