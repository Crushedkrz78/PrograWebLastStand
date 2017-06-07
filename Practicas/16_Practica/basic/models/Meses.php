<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meses".
 *
 * @property integer $id_mes
 * @property string $mes
 */
class Meses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mes'], 'required'],
            [['id_mes'], 'integer'],
            [['mes'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mes' => 'Id Mes',
            'mes' => 'Mes',
        ];
    }
}
