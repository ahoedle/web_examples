<?php

/**
 * This is the model class for table "vet".
 *
 * The followings are the available columns in table 'vet':
 * @property integer $vet_id
 * @property string $name
 * @property string $address
 * @property integer $postcode
 * @property string $place
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $homepage
 * @property string $Notfaelle
 *
 * The followings are the available model relations:
 * @property Opening[] $openings
 */
class Vet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vet the static model class
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
		return 'vet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('homepage, Notfaelle', 'required'),
			array('postcode', 'numerical', 'integerOnly'=>true),
			array('name, address, place, tel, fax, email, homepage, Notfaelle', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vet_id, name, address, postcode, place, tel, fax, email, homepage, Notfaelle', 'safe', 'on'=>'search'),
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
			'openings' => array(self::HAS_MANY, 'Opening', 'vet_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vet_id' => 'Vet',
			'name' => 'Name',
			'address' => 'Address',
			'postcode' => 'PLZ',
			'place' => 'Place',
			'tel' => 'Tel',
			'fax' => 'Fax',
			'email' => 'Email',
			'homepage' => 'Homepage',
			'Notfaelle' => 'Notfaelle',
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

		$criteria->compare('vet_id',$this->vet_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postcode',$this->postcode);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('homepage',$this->homepage,true);
		$criteria->compare('Notfaelle',$this->Notfaelle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}