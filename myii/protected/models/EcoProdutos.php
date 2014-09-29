<?php

/**
 * This is the model class for table "eco_produtos".
 *
 * The followings are the available columns in table 'eco_produtos':
 * @property integer $pro_id
 * @property integer $pro_id_cagegoria
 * @property integer $pro_codigo
 * @property string $pro_nome
 * @property string $pro_descricao
 * @property string $pro_preco_de
 * @property string $pro_preco_por
 * @property string $pro_data
 * @property string $pro_tamanho
 * @property integer $pro_status
 */
class EcoProdutos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eco_produtos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_id_cagegoria, pro_codigo, pro_nome, pro_descricao, pro_preco_de, pro_preco_por, pro_data, pro_tamanho, pro_status', 'required'),
			array('pro_id_cagegoria, pro_codigo, pro_status', 'numerical', 'integerOnly'=>true),
			array('pro_nome, pro_tamanho', 'length', 'max'=>200),
			array('pro_descricao', 'length', 'max'=>400),
			array('pro_preco_de, pro_preco_por', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_id, pro_id_cagegoria, pro_codigo, pro_nome, pro_descricao, pro_preco_de, pro_preco_por, pro_data, pro_tamanho, pro_status', 'safe', 'on'=>'search'),
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
			'pro_id' => 'Pro',
			'pro_id_cagegoria' => 'Pro Id Cagegoria',
			'pro_codigo' => 'Pro Codigo',
			'pro_nome' => 'Pro Nome',
			'pro_descricao' => 'Pro Descricao',
			'pro_preco_de' => 'Pro Preco De',
			'pro_preco_por' => 'Pro Preco Por',
			'pro_data' => 'Pro Data',
			'pro_tamanho' => 'Pro Tamanho',
			'pro_status' => 'Pro Status',
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

		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('pro_id_cagegoria',$this->pro_id_cagegoria);
		$criteria->compare('pro_codigo',$this->pro_codigo);
		$criteria->compare('pro_nome',$this->pro_nome,true);
		$criteria->compare('pro_descricao',$this->pro_descricao,true);
		$criteria->compare('pro_preco_de',$this->pro_preco_de,true);
		$criteria->compare('pro_preco_por',$this->pro_preco_por,true);
		$criteria->compare('pro_data',$this->pro_data,true);
		$criteria->compare('pro_tamanho',$this->pro_tamanho,true);
		$criteria->compare('pro_status',$this->pro_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EcoProdutos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
