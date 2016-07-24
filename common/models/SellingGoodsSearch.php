<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SellingGoods;

/**
 * SellingGoodsSearch represents the model behind the search form about `common\models\SellingGoods`.
 */
class SellingGoodsSearch extends SellingGoods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'measure', 'value', 'our_price', 'created_at', 'updated_at', 'sorts_of_goods_id', 'user_id', 'departament_id'], 'integer'],
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
        $query = SellingGoods::find();

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
            'measure' => $this->measure,
            'value' => $this->value,
            'our_price' => $this->our_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'sorts_of_goods_id' => $this->sorts_of_goods_id,
            'user_id' => $this->user_id,
            'departament_id' => $this->departament_id,
        ]);

        return $dataProvider;
    }
}
