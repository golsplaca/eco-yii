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
 * @property string $pro_img_1
 * @property string $pro_img_2
 * @property string $pro_img_3
 * @property string $pro_img_4
 * @property string $pro_img_5
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
			array('pro_id_cagegoria, pro_codigo, pro_nome, pro_descricao, pro_preco_de, pro_preco_por, pro_data, pro_tamanho, pro_status, pro_img_1', 'required'),
			array('pro_id_cagegoria, pro_codigo, pro_status', 'numerical', 'integerOnly'=>true),
			array('pro_nome, pro_tamanho, pro_img_1, pro_img_2, pro_img_3, pro_img_4, pro_img_5', 'length', 'max'=>200),
			array('pro_descricao', 'length', 'max'=>400),
			array('pro_preco_de, pro_preco_por', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_id, pro_id_cagegoria, pro_codigo, pro_nome, pro_descricao, pro_preco_de, pro_preco_por, pro_data, pro_tamanho, pro_status, pro_img_1, pro_img_2, pro_img_3, pro_img_4, pro_img_5', 'safe', 'on'=>'search'),
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
			'pro_id_cagegoria' => 'Cagegoria',
			'pro_codigo' => 'Codigo',
			'pro_nome' => 'Nome',
			'pro_descricao' => 'Descricao',
			'pro_preco_de' => 'Preco De',
			'pro_preco_por' => 'Preco Por',
			'pro_data' => 'Data',
			'pro_tamanho' => 'Tamanho',
			'pro_status' => 'Status',
			'pro_img_1' => 'Imagem 1',
			'pro_img_2' => 'Imagem 2',
			'pro_img_3' => 'Imagem 3',
			'pro_img_4' => 'Imagem 4',
			'pro_img_5' => 'Imagem 5',
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
		$criteria->compare('pro_img_1',$this->pro_img_1,true);
		$criteria->compare('pro_img_2',$this->pro_img_2,true);
		$criteria->compare('pro_img_3',$this->pro_img_3,true);
		$criteria->compare('pro_img_4',$this->pro_img_4,true);
		$criteria->compare('pro_img_5',$this->pro_img_5,true);

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
