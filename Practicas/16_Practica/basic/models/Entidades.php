<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entidades".
 *
 * @property string $clave
 * @property string $estado
 */
class Entidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clave'], 'required'],
            [['clave'], 'string', 'max' => 5],
            [['estado'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clave' => 'Clave',
            'estado' => 'Estado',
        ];
    }
}
