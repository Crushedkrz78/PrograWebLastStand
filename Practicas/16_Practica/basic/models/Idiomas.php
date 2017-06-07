<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idiomas".
 *
 * @property string $idioma
 * @property integer $id
 *
 * @property PaisIdiomas[] $paisIdiomas
 */
class Idiomas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'idiomas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idioma', 'id'], 'required'],
            [['id'], 'integer'],
            [['idioma'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idioma' => 'Idioma',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaisIdiomas()
    {
        return $this->hasMany(PaisIdiomas::className(), ['idioma_id' => 'id']);
    }
}
