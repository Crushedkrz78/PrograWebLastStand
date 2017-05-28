<?php

/**
 * This is the model class for table "municipios".
 *
 * The followings are the available columns in table 'municipios':
 * @property integer $id_municipio
 * @property string $clave
 * @property string $nombre
 * @property integer $id_estado
 *
 * The followings are the available model relations:
 * @property Escuelas[] $escuelases
 * @property Instituciones[] $instituciones
 * @property Localidades[] $localidades
 * @property Estados $idEstado
 */
class Municipios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clave, nombre, id_estado', 'required'),
			array('id_estado', 'numerical', 'integerOnly'=>true),
			array('clave', 'length', 'max'=>3),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_municipio, clave, nombre, id_estado', 'safe', 'on'=>'search'),
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
			'escuelases' => array(self::HAS_MANY, 'Escuelas', 'id_municipio'),
			'instituciones' => array(self::HAS_MANY, 'Instituciones', 'id_municipio'),
			'localidades' => array(self::HAS_MANY, 'Localidades', 'id_municipio'),
			'idEstado' => array(self::BELONGS_TO, 'Estados', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_municipio' => 'Id Municipio',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'id_estado' => 'Id Estado',
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

		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_estado',$this->id_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Municipios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
