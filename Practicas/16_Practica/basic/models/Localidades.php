<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localidades".
 *
 * @property integer $id_localidad
 * @property string $clave
 * @property string $nombre
 * @property string $latitud
 * @property string $longitud
 * @property string $altitud
 * @property integer $id_municipio
 *
 * @property Municipios $idMunicipio
 */
class Localidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'localidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clave', 'nombre', 'latitud', 'longitud', 'altitud', 'id_municipio'], 'required'],
            [['id_municipio'], 'integer'],
            [['clave', 'altitud'], 'string', 'max' => 4],
            [['nombre'], 'string', 'max' => 110],
            [['latitud'], 'string', 'max' => 6],
            [['longitud'], 'string', 'max' => 7],
            [['id_municipio'], 'exist', 'skipOnError' => true, 'targetClass' => Municipios::className(), 'targetAttribute' => ['id_municipio' => 'id_municipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_localidad' => 'Id Localidad',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'altitud' => 'Altitud',
            'id_municipio' => 'Id Municipio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMunicipio()
    {
        return $this->hasOne(Municipios::className(), ['id_municipio' => 'id_municipio']);
    }
}
