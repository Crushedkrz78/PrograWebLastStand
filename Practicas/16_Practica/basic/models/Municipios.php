<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipios".
 *
 * @property integer $id_municipio
 * @property string $clave
 * @property string $nombre
 * @property integer $id_estado
 *
 * @property Escuelas[] $escuelas
 * @property Instituciones[] $instituciones
 * @property Localidades[] $localidades
 * @property Estados $idEstado
 */
class Municipios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clave', 'nombre', 'id_estado'], 'required'],
            [['id_estado'], 'integer'],
            [['clave'], 'string', 'max' => 3],
            [['nombre'], 'string', 'max' => 50],
            [['id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estados::className(), 'targetAttribute' => ['id_estado' => 'id_estado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_municipio' => 'Id Municipio',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'id_estado' => 'Id Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscuelas()
    {
        return $this->hasMany(Escuelas::className(), ['id_municipio' => 'id_municipio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstituciones()
    {
        return $this->hasMany(Instituciones::className(), ['id_municipio' => 'id_municipio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocalidades()
    {
        return $this->hasMany(Localidades::className(), ['id_municipio' => 'id_municipio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado()
    {
        return $this->hasOne(Estados::className(), ['id_estado' => 'id_estado']);
    }
}
