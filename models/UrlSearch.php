<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Url;

/**
 * UrlSearch represents the model behind the search form of `app\models\Url`.
 */
class UrlSearch extends Url
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gen', 'click'], 'integer'],
            [['org_url', 'short_link', 'analitic'], 'safe'],
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
        $query = Url::find();

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
            'id' => $this->id,
            'gen' => $this->gen,
            'click' => $this->click,
        ]);

        $query->andFilterWhere(['like', 'org_url', $this->org_url])
            ->andFilterWhere(['like', 'short_link', $this->short_link])
            ->andFilterWhere(['like', 'analitic', $this->analitic]);

        return $dataProvider;
    }
}
