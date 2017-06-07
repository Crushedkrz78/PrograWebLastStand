<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "continentes".
 *
 * @property string $continente
 * @property integer $id
 */
class Continentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'continentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['continente', 'id'], 'required'],
            [['id'], 'integer'],
            [['continente'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'continente' => 'Continente',
            'id' => 'ID',
        ];
    }
}
