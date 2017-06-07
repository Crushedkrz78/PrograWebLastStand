<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direcciones_coordinaciones".
 *
 * @property integer $id_direccion
 * @property string $nombre
 * @property string $letras
 *
 * @property Subsistemas[] $subsistemas
 */
class DireccionesCoordinaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'direcciones_coordinaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'letras'], 'required'],
            [['nombre'], 'string', 'max' => 500],
            [['letras'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_direccion' => 'Id Direccion',
            'nombre' => 'Nombre',
            'letras' => 'Letras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubsistemas()
    {
        return $this->hasMany(Subsistemas::className(), ['id_direccion' => 'id_direccion']);
    }
}
