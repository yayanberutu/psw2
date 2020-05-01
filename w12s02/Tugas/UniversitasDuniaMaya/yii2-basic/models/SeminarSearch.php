<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seminar;

/**
 * SeminarSearch represents the model behind the search form of `app\models\Seminar`.
 */
class SeminarSearch extends Seminar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_seminar', 'id_account'], 'integer'],
            [['nama_seminar', 'tgl_seminar', 'waktu_seminar', 'lokasi_seminar'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Seminar::find();

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
            'id_seminar' => $this->id_seminar,
            'id_account' => $this->id_account,
            'tgl_seminar' => $this->tgl_seminar,
            'waktu_seminar' => $this->waktu_seminar,
        ]);

        $query->andFilterWhere(['like', 'nama_seminar', $this->nama_seminar])
            ->andFilterWhere(['like', 'lokasi_seminar', $this->lokasi_seminar]);

        return $dataProvider;
    }
}
