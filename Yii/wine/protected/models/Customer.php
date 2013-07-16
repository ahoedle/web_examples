<?php

/**
 * This is the model class for table "tbl_customer".
 *
 * The followings are the available columns in table 'tbl_customer':
 * @property integer $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property integer $zipcode
 * @property string $location
 * @property string $country
 * @property string $number
 * @property string $email
 *
 * The followings are the available model relations:
 * @property TblInvoice[] $tblInvoices
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customer the static model class
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
		return 'tbl_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('zipcode', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, address, location, email', 'length', 'max'=>100),
			array('country', 'length', 'max'=>45),
			array('number', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('customer_id, firstname, lastname, address, zipcode, location, country, number, email', 'safe', 'on'=>'search'),
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
			'tblInvoices' => array(self::HAS_MANY, 'TblInvoice', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'customer_id' => 'Customer',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'address' => 'Address',
			'zipcode' => 'Zipcode',
			'location' => 'Location',
			'country' => 'Country',
			'number' => 'Number',
			'email' => 'Email',
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

		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipcode',$this->zipcode);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}