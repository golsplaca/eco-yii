<?php

/**
 * This is the model class for table "eco_usuario".
 *
 * The followings are the available columns in table 'eco_usuario':
 * @property integer $usu_id
 * @property string $usu_nivel
 * @property string $usu_login
 * @property string $usu_senha
 * @property string $usu_nome
 * @property string $usu_email
 * @property string $usu_fone
 * @property string $usu_nascimento
 * @property integer $usu_cpf
 * @property integer $usu_rg
 * @property string $usu_endereco
 * @property string $usu_estado
 * @property string $usu_cidade
 * @property integer $usu_numero
 * @property string $usu_fonr_cel
 * @property integer $usu_cep
 * @property string $usu_data
 */
class EcoUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eco_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usu_nivel, usu_senha, usu_nome, usu_email, usu_fonr_cel', 'required'),
			array('usu_email', 'email'),
			array('usu_cpf, usu_rg, usu_numero, usu_cep', 'numerical', 'integerOnly'=>true),
			array('usu_nivel', 'length', 'max'=>20),
			array('usu_login, usu_fone, usu_cidade, usu_fonr_cel', 'length', 'max'=>50),
			array('usu_senha, usu_nome, usu_email', 'length', 'max'=>100),
			array('usu_nascimento, usu_estado, usu_data', 'length', 'max'=>10),
			array('usu_endereco', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usu_id, usu_nivel, usu_login, usu_senha, usu_nome, usu_email, usu_fone, usu_nascimento, usu_cpf, usu_rg, usu_endereco, usu_estado, usu_cidade, usu_numero, usu_fonr_cel, usu_cep, usu_data', 'safe', 'on'=>'search'),
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
			'usu_id' => 'Codigo',
			'usu_nivel' => 'Acesso',
			'usu_login' => 'Login',
			'usu_senha' => 'Senha',
			'usu_nome' => 'Nome',
			'usu_email' => 'Email',
			'usu_fone' => 'Telefone',
			'usu_nascimento' => 'Data de nascimento',
			'usu_cpf' => 'CPF',
			'usu_rg' => 'RG',
			'usu_endereco' => 'Endereço',
			'usu_estado' => 'Estado',
			'usu_cidade' => 'Cidade',
			'usu_numero' => 'Número',
			'usu_fonr_cel' => 'Celular',
			'usu_cep' => 'CEP',
			'usu_data' => 'Data cadastro',
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

		$criteria->compare('usu_id',$this->usu_id);
		$criteria->compare('usu_nivel',$this->usu_nivel,true);
		$criteria->compare('usu_login',$this->usu_login,true);
		$criteria->compare('usu_senha',$this->usu_senha,true);
		$criteria->compare('usu_nome',$this->usu_nome,true);
		$criteria->compare('usu_email',$this->usu_email,true);
		$criteria->compare('usu_fone',$this->usu_fone,true);
		$criteria->compare('usu_nascimento',$this->usu_nascimento,true);
		$criteria->compare('usu_cpf',$this->usu_cpf);
		$criteria->compare('usu_rg',$this->usu_rg);
		$criteria->compare('usu_endereco',$this->usu_endereco,true);
		$criteria->compare('usu_estado',$this->usu_estado,true);
		$criteria->compare('usu_cidade',$this->usu_cidade,true);
		$criteria->compare('usu_numero',$this->usu_numero);
		$criteria->compare('usu_fonr_cel',$this->usu_fonr_cel,true);
		$criteria->compare('usu_cep',$this->usu_cep);
		$criteria->compare('usu_data',$this->usu_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EcoUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
