<?php

/**
 * This is the model class for table "tbl_wine".
 *
 * The followings are the available columns in table 'tbl_wine':
 * @property integer $wine_id
 * @property string $name
 * @property string $manufacturer
 * @property string $location
 * @property string $country
 * @property string $vintage
 * @property string $description
 * @property string $price
 * @property integer $stock
 * @property integer $order_id
 *
 * The followings are the available model relations:
 * @property TblOrder $order
 */
class Wine extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wine the static model class
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
		return 'tbl_wine';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country, vintage, price', 'required'),
			array('stock, order_id', 'numerical', 'integerOnly'=>true),
			array('name, manufacturer, location, country', 'length', 'max'=>100),
			array('vintage', 'length', 'max'=>4),
			array('description', 'length', 'max'=>500),
			array('price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('wine_id, name, manufacturer, location, country, vintage, description, price, stock, order_id', 'safe', 'on'=>'search'),
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
			'order' => array(self::BELONGS_TO, 'TblOrder', 'order_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'wine_id' => 'Wine',
			'name' => 'Name',
			'manufacturer' => 'Manufacturer',
			'location' => 'Location',
			'country' => 'Country',
			'vintage' => 'Vintage',
			'description' => 'Description',
			'price' => 'Price',
			'stock' => 'Stock',
			'order_id' => 'Order',
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

		$criteria->compare('wine_id',$this->wine_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('vintage',$this->vintage,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('order_id',$this->order_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}