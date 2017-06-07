<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Escuelas;

/**
 * EscuelasSearch represents the model behind the search form about `app\models\Escuelas`.
 */
class EscuelasSearch extends Escuelas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_escuela', 'escuela', 'id_institucion'], 'safe'],
            [['id_municipio'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Escuelas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_municipio' => $this->id_municipio,
        ]);

        $query->andFilterWhere(['like', 'id_escuela', $this->id_escuela])
            ->andFilterWhere(['like', 'escuela', $this->escuela])
            ->andFilterWhere(['like', 'id_institucion', $this->id_institucion]);

        return $dataProvider;
    }
}
