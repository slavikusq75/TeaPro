<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PriceOfGoods;

/**
 * PriceOfGoodsSearch represents the model behind the search form about `common\models\PriceOfGoods`.
 */
class PriceOfGoodsSearch extends PriceOfGoods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'our_price', 'sorts_of_goods_id', 'created_at', 'updated_at', 'user_id', 'departament_id'], 'integer'],
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
        $query = PriceOfGoods::find();

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
            'our_price' => $this->our_price,
            'sorts_of_goods_id' => $this->sorts_of_goods_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'departament_id' => $this->departament_id,
        ]);

        return $dataProvider;
    }
}
