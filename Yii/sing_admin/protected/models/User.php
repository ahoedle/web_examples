<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $user_id
 * @property string $internal_nr
 * @property integer $course_id
 * @property string $salutation
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $postcode
 * @property string $place
 * @property string $tel
 * @property string $mobile
 * @property string $email
 * @property string $newsletter
 * @property string $educational_partner
 * @property string $info
 * @property string $recorded_by
 * @property string $birthday
 * @property string $status
 * @property string $social_security_nr
 * @property string $advisor1
 * @property string $advisor2
 * @property string $advisor_email
 * @property string $ams_district
 *
 * The followings are the available model relations:
 * @property CourseTaken[] $courseTakens
 * @property InvoiceAddress[] $invoiceAddresses
 * @property Course $course
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id', 'numerical', 'integerOnly'=>true),
			array('internal_nr', 'length', 'max'=>30),
			array('salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, educational_partner, recorded_by, birthday, status, social_security_nr, advisor1, advisor2, advisor_email, ams_district', 'length', 'max'=>100),
			array('newsletter', 'length', 'max'=>10),
			array('info', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, internal_nr, course_id, salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, newsletter, educational_partner, info, recorded_by, birthday, status, social_security_nr, advisor1, advisor2, advisor_email, ams_district', 'safe', 'on'=>'search'),
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
			'courseTakens' => array(self::HAS_MANY, 'CourseTaken', 'user_id'),
			'invoiceAddresses' => array(self::HAS_MANY, 'InvoiceAddress', 'user_id'),
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'internal_nr' => 'Internal Nr',
			'course_id' => 'Course',
			'salutation' => 'Salutation',
			'title' => 'Title',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'postcode' => 'Postcode',
			'place' => 'Place',
			'tel' => 'Tel',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'newsletter' => 'Newsletter',
			'educational_partner' => 'Educational Partner',
			'info' => 'Info',
			'recorded_by' => 'Recorded By',
			'birthday' => 'Birthday',
			'status' => 'Status',
			'social_security_nr' => 'Social Security Nr',
			'advisor1' => 'Advisor1',
			'advisor2' => 'Advisor2',
			'advisor_email' => 'Advisor Email',
			'ams_district' => 'Ams District',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('internal_nr',$this->internal_nr,true);
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('salutation',$this->salutation,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('newsletter',$this->newsletter,true);
		$criteria->compare('educational_partner',$this->educational_partner,true);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('recorded_by',$this->recorded_by,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('social_security_nr',$this->social_security_nr,true);
		$criteria->compare('advisor1',$this->advisor1,true);
		$criteria->compare('advisor2',$this->advisor2,true);
		$criteria->compare('advisor_email',$this->advisor_email,true);
		$criteria->compare('ams_district',$this->ams_district,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}