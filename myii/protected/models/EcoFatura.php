<?php

/**
 * This is the model class for table "eco_fatura".
 *
 * The followings are the available columns in table 'eco_fatura':
 * @property integer $fat_id
 * @property integer $fat_id_cliente
 * @property string $fat_object
 * @property integer $fat_endereco
 * @property integer $fat_status
 * @property integer $fat_codigo
 * @property string $fat_data
 */
class EcoFatura extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eco_fatura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fat_id_cliente, fat_object, fat_endereco, fat_status', 'required'),
			array('fat_id_cliente, fat_endereco, fat_status, fat_codigo', 'numerical', 'integerOnly'=>true),
			array('fat_data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fat_id, fat_id_cliente, fat_object, fat_endereco, fat_status, fat_codigo, fat_data', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fat_id' => 'Id_fatura',
			'fat_id_cliente' => 'Cod. Cliente:',
			'fat_object' => 'Objeto produtos:',
			'fat_endereco' => 'Endereco de entrega:',
			'fat_status' => 'Status:',
			'fat_codigo' => 'Codigo:',
			'fat_data' => 'Data:',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('fat_id',$this->fat_id);
		$criteria->compare('fat_id_cliente',$this->fat_id_cliente);
		$criteria->compare('fat_object',$this->fat_object,true);
		$criteria->compare('fat_endereco',$this->fat_endereco);
		$criteria->compare('fat_status',$this->fat_status);
		$criteria->compare('fat_codigo',$this->fat_codigo);
		$criteria->compare('fat_data',$this->fat_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EcoFatura the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
