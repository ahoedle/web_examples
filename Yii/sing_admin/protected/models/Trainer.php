<?php

/**
 * This is the model class for table "{{trainer}}".
 *
 * The followings are the available columns in table '{{trainer}}':
 * @property integer $trainer_id
 * @property string $password
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
 * @property string $info
 * @property string $recorded_by
 * @property string $birthday
 * @property string $status
 * @property string $social_security_nr
 * @property string $subjects
 *
 * The followings are the available model relations:
 * @property CourseGiven[] $courseGivens
 */
class Trainer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trainer the static model class
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
		return '{{trainer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password', 'required'),
			array('password', 'length', 'max'=>45),
			array('salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, recorded_by, birthday, status, social_security_nr, subjects', 'length', 'max'=>100),
			array('newsletter', 'length', 'max'=>10),
			array('info', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trainer_id, password, salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, newsletter, info, recorded_by, birthday, status, social_security_nr, subjects', 'safe', 'on'=>'search'),
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
			'courseGivens' => array(self::HAS_MANY, 'CourseGiven', 'trainer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trainer_id' => 'Trainer',
			'password' => 'Password',
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
			'info' => 'Info',
			'recorded_by' => 'Recorded By',
			'birthday' => 'Birthday',
			'status' => 'Status',
			'social_security_nr' => 'Social Security Nr',
			'subjects' => 'Subjects',
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
		$criteria->compare('password',$this->password,true);
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
		$criteria->compare('info',$this->info,true);
		$criteria->compare('recorded_by',$this->recorded_by,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('social_security_nr',$this->social_security_nr,true);
		$criteria->compare('subjects',$this->subjects,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}