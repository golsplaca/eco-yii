<?php

/**
 * This is the model class for table "eco_banner".
 *
 * The followings are the available columns in table 'eco_banner':
 * @property integer $ba_guid
 * @property integer $pro_guid
 * @property string $ba_nome
 * @property string $ba_data
 * @property string $ba_imagem
 * @property integer $status
 */
class EcoBanner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eco_banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_guid, ba_nome, ba_data, ba_imagem, status', 'required'),
			array('pro_guid, status', 'numerical', 'integerOnly'=>true),
			array('ba_nome, ba_imagem', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ba_guid, pro_guid, ba_nome, ba_data, ba_imagem, status', 'safe', 'on'=>'search'),
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
			'ba_guid' => 'Ba Guid',
			'pro_guid' => 'Pro Guid',
			'ba_nome' => 'Ba Nome',
			'ba_data' => 'Ba Data',
			'ba_imagem' => 'Ba Imagem',
			'status' => 'Status',
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

		$criteria->compare('ba_guid',$this->ba_guid);
		$criteria->compare('pro_guid',$this->pro_guid);
		$criteria->compare('ba_nome',$this->ba_nome,true);
		$criteria->compare('ba_data',$this->ba_data,true);
		$criteria->compare('ba_imagem',$this->ba_imagem,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EcoBanner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
