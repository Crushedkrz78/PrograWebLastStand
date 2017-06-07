<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escuelas".
 *
 * @property string $id_escuela
 * @property string $escuela
 * @property string $id_institucion
 * @property integer $id_municipio
 *
 * @property Instituciones $idInstitucion
 * @property Municipios $idMunicipio
 */
class Escuelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escuelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_escuela', 'id_municipio'], 'required'],
            [['id_municipio'], 'integer'],
            [['id_escuela', 'id_institucion'], 'string', 'max' => 15],
            [['escuela'], 'string', 'max' => 500],
            [['id_institucion'], 'exist', 'skipOnError' => true, 'targetClass' => Instituciones::className(), 'targetAttribute' => ['id_institucion' => 'id_institucion']],
            [['id_municipio'], 'exist', 'skipOnError' => true, 'targetClass' => Municipios::className(), 'targetAttribute' => ['id_municipio' => 'id_municipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_escuela' => 'Id Escuela',
            'escuela' => 'Escuela',
            'id_institucion' => 'Id Institucion',
            'id_municipio' => 'Id Municipio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInstitucion()
    {
        return $this->hasOne(Instituciones::className(), ['id_institucion' => 'id_institucion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMunicipio()
    {
        return $this->hasOne(Municipios::className(), ['id_municipio' => 'id_municipio']);
    }
}
