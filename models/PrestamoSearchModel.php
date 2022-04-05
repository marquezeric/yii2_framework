<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prestamo;

/**
 * PrestamoSearchModel represents the model behind the search form about `app\models\Prestamo`.
 */
class PrestamoSearchModel extends Prestamo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prestamo'], 'integer'],
            [['fec_prestamo', 'fec_devolucion', 'usr_responsable', 'usr_solicitante', 'num_serie', 'observaciones'], 'safe'],
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
        $query = Prestamo::find();

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
            'id_prestamo' => $this->id_prestamo,
            'fec_prestamo' => $this->fec_prestamo,
            'fec_devolucion' => $this->fec_devolucion,
        ]);

        $query->andFilterWhere(['like', 'usr_responsable', $this->usr_responsable])
            ->andFilterWhere(['like', 'usr_solicitante', $this->usr_solicitante])
            ->andFilterWhere(['like', 'num_serie', $this->num_serie])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
