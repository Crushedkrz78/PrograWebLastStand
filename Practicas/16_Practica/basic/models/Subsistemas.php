<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subsistemas".
 *
 * @property integer $id_subsistema
 * @property string $nombre
 * @property integer $id_direccion
 *
 * @property Instituciones[] $instituciones
 * @property DireccionesCoordinaciones $idDireccion
 */
class Subsistemas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subsistemas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['id_direccion'], 'integer'],
            [['nombre'], 'string', 'max' => 300],
            [['id_direccion'], 'exist', 'skipOnError' => true, 'targetClass' => DireccionesCoordinaciones::className(), 'targetAttribute' => ['id_direccion' => 'id_direccion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_subsistema' => 'Id Subsistema',
            'nombre' => 'Nombre',
            'id_direccion' => 'Id Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstituciones()
    {
        return $this->hasMany(Instituciones::className(), ['id_subsistema' => 'id_subsistema']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDireccion()
    {
        return $this->hasOne(DireccionesCoordinaciones::className(), ['id_direccion' => 'id_direccion']);
    }
}
