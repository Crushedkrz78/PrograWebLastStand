<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estados".
 *
 * @property integer $id_estado
 * @property string $clave
 * @property string $nombre
 * @property string $abrev
 * @property string $zona
 *
 * @property Municipios[] $municipios
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clave', 'nombre', 'abrev'], 'required'],
            [['clave'], 'string', 'max' => 2],
            [['nombre'], 'string', 'max' => 45],
            [['abrev'], 'string', 'max' => 16],
            [['zona'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado' => 'Id Estado',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
            'abrev' => 'Abrev',
            'zona' => 'Zona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipios()
    {
        return $this->hasMany(Municipios::className(), ['id_estado' => 'id_estado']);
    }
}
