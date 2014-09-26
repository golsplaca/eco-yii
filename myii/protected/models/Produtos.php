<?php

/**
 * This is the model class for table "produtos".
 *
 * The followings are the available columns in table 'produtos':
 * @property integer $id
 * @property integer $codigo
 * @property string $nome
 * @property string $descricao
 * @property double $preco_de
 * @property double $preco_por
 * @property string $data
 * @property integer $id_categoria
 */
class Produtos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produtos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, nome, descricao, preco_de, preco_por, data, id_categoria', 'required'),
			array('codigo, id_categoria', 'numerical', 'integerOnly'=>true),
			array('preco_de, preco_por', 'numerical'),
			array('nome', 'length', 'max'=>200),
			array('data', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, codigo, nome, descricao, preco_de, preco_por, data, id_categoria', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'codigo' => 'Codigo',
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'preco_de' => 'Preco De',
			'preco_por' => 'Preco Por',
			'data' => 'Data',
			'id_categoria' => 'Id Categoria',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('preco_de',$this->preco_de);
		$criteria->compare('preco_por',$this->preco_por);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('id_categoria',$this->id_categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produtos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
