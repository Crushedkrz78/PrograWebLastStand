<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instituciones".
 *
 * @property string $id_institucion
 * @property string $nombreins
 * @property integer $id_municipio
 * @property integer $id_subsistema
 *
 * @property Escuelas[] $escuelas
 * @property Subsistemas $idSubsistema
 * @property Municipios $idMunicipio
 */
class Instituciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instituciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_institucion', 'id_municipio'], 'required'],
            [['id_municipio', 'id_subsistema'], 'integer'],
            [['id_institucion'], 'string', 'max' => 15],
            [['nombreins'], 'string', 'max' => 500],
            [['id_subsistema'], 'exist', 'skipOnError' => true, 'targetClass' => Subsistemas::className(), 'targetAttribute' => ['id_subsistema' => 'id_subsistema']],
            [['id_municipio'], 'exist', 'skipOnError' => true, 'targetClass' => Municipios::className(), 'targetAttribute' => ['id_municipio' => 'id_municipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_institucion' => 'Id Institucion',
            'nombreins' => 'Nombreins',
            'id_municipio' => 'Id Municipio',
            'id_subsistema' => 'Id Subsistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscuelas()
    {
        return $this->hasMany(Escuelas::className(), ['id_institucion' => 'id_institucion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubsistema()
    {
        return $this->hasOne(Subsistemas::className(), ['id_subsistema' => 'id_subsistema']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMunicipio()
    {
        return $this->hasOne(Municipios::className(), ['id_municipio' => 'id_municipio']);
    }
}
