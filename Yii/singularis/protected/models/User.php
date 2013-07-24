<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property integer $user_id
 * @property string $password
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
 * @property Course $course
 * @property CourseTaken[] $courseTakens
 * @property InvoiceAddress[] $invoiceAddresses
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
		return 'User';
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
			array('course_id', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>45),
			array('salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, educational_partner, recorded_by, birthday, status, social_security_nr, advisor1, advisor2, advisor_email, ams_district', 'length', 'max'=>100),
			array('newsletter', 'length', 'max'=>10),
			array('info', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, password, course_id, salutation, title, first_name, last_name, address, postcode, place, tel, mobile, email, newsletter, educational_partner, info, recorded_by, birthday, status, social_security_nr, advisor1, advisor2, advisor_email, ams_district', 'safe', 'on'=>'search'),
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
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
			'courseTakens' => array(self::HAS_MANY, 'CourseTaken', 'user_id'),
			'invoiceAddresses' => array(self::HAS_MANY, 'InvoiceAddress', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'ID',
			'password' => 'Passwort',
			'course_id' => 'Kurs ID',
			'salutation' => 'Anrede',
			'title' => 'Titel',
			'first_name' => 'Vorname',
			'last_name' => 'Nachname',
			'address' => 'Adresse',
			'postcode' => 'PLZ',
			'place' => 'Ort',
			'tel' => 'Telefonnummer',
			'mobile' => 'Mobil',
			'email' => 'E-mail',
			'newsletter' => 'Newsletter',
			'educational_partner' => 'Bildungspartner',
			'info' => 'Info',
			'recorded_by' => 'Erfasst von',
			'birthday' => 'Geburtstag',
			'status' => 'Status',
			'social_security_nr' => 'Sozialversicherungsnummer',
			'advisor1' => 'ASM/FAB Berater',
			'advisor2' => 'Berater (alt)',
			'advisor_email' => 'Berater E-mail',
			'ams_district' => 'Ams Bezirk',
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
		$criteria->compare('password',$this->password,true);
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