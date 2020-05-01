<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peserta;

/**
 * PesertaSearch represents the model behind the search form of `app\models\Peserta`.
 */
class PesertaSearch extends Peserta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_peserta', 'id_seminar'], 'integer'],
            [['nama_peserta', 'status_peserta', 'prodi_peserta'], 'safe'],
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
        $query = Peserta::find();

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
            'id_peserta' => $this->id_peserta,
            'id_seminar' => $this->id_seminar,
        ]);

        $query->andFilterWhere(['like', 'nama_peserta', $this->nama_peserta])
            ->andFilterWhere(['like', 'status_peserta', $this->status_peserta])
            ->andFilterWhere(['like', 'prodi_peserta', $this->prodi_peserta]);

        return $dataProvider;
    }
}
