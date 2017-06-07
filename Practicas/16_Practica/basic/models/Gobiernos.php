<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gobiernos".
 *
 * @property string $gobierno
 * @property integer $id
 */
class Gobiernos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gobiernos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gobierno', 'id'], 'required'],
            [['id'], 'integer'],
            [['gobierno'], 'string', 'max' => 40],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gobierno' => 'Gobierno',
            'id' => 'ID',
        ];
    }
}
