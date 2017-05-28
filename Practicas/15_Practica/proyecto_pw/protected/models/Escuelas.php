<?php

/**
 * This is the model class for table "escuelas".
 *
 * The followings are the available columns in table 'escuelas':
 * @property string $id_escuela
 * @property string $escuela
 * @property string $id_institucion
 * @property integer $id_municipio
 *
 * The followings are the available model relations:
 * @property Instituciones $idInstitucion
 * @property Municipios $idMunicipio
 */
class Escuelas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'escuelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_escuela, id_municipio', 'required'),
			array('id_municipio', 'numerical', 'integerOnly'=>true),
			array('id_escuela, id_institucion', 'length', 'max'=>15),
			array('escuela', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_escuela, escuela, id_institucion, id_municipio', 'safe', 'on'=>'search'),
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
			'idInstitucion' => array(self::BELONGS_TO, 'Instituciones', 'id_institucion'),
			'idMunicipio' => array(self::BELONGS_TO, 'Municipios', 'id_municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_escuela' => 'Id Escuela',
			'escuela' => 'Escuela',
			'id_institucion' => 'Id Institucion',
			'id_municipio' => 'Id Municipio',
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

		$criteria->compare('id_escuela',$this->id_escuela,true);
		$criteria->compare('escuela',$this->escuela,true);
		$criteria->compare('id_institucion',$this->id_institucion,true);
		$criteria->compare('id_municipio',$this->id_municipio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Escuelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
