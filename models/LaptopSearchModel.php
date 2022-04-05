<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Laptop;

/**
 * LaptopSearchModel represents the model behind the search form about `app\models\Laptop`.
 */
class LaptopSearchModel extends Laptop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_serie', 'marca', 'modelo', 'procesador', 'memoria', 'discod', 'sis_operativo'], 'safe'],
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
        $query = Laptop::find();

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
        $query->andFilterWhere(['like', 'num_serie', $this->num_serie])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'procesador', $this->procesador])
            ->andFilterWhere(['like', 'memoria', $this->memoria])
            ->andFilterWhere(['like', 'discod', $this->discod])
            ->andFilterWhere(['like', 'sis_operativo', $this->sis_operativo]);

        return $dataProvider;
    }
}
