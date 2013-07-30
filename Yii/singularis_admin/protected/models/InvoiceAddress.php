<?php

/**
 * This is the model class for table "sing_invoice_address".
 *
 * The followings are the available columns in table 'sing_invoice_address':
 * @property integer $address_id
 * @property string $name
 * @property string $nr
 * @property string $contact
 * @property string $address
 * @property string $postcode
 * @property string $place
 * @property string $tel
 * @property string $email
 * @property string $url
 * @property string $type
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property SingUser $user
 */
class InvoiceAddress extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvoiceAddress the static model class
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
		return 'sing_invoice_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('name, nr, contact, address, postcode, place, tel, email, url, type', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('address_id, name, nr, contact, address, postcode, place, tel, email, url, type, user_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'SingUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'address_id' => 'Address',
			'name' => 'Name',
			'nr' => 'Nr',
			'contact' => 'Contact',
			'address' => 'Address',
			'postcode' => 'Postcode',
			'place' => 'Place',
			'tel' => 'Tel',
			'email' => 'Email',
			'url' => 'Url',
			'type' => 'Type',
			'user_id' => 'User',
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

		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nr',$this->nr,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}