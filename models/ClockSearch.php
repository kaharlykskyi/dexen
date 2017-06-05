<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clock;

/**
 * ClockSearch represents the model behind the search form about `app\models\Clock`.
 */
class ClockSearch extends Clock
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'manufacture', 'price', 'gender', 'mechanism', 'type', 'case_material', 'case_form', 'width', 'height', 'depth', 'water_resistance', 'glass', 'watchband', 'time_display', 'dial_symbols', 'color_case', 'color_watchband', 'in_stock', 'count', 'purchase_price', 'hot_price', 'display'], 'integer'],
            [['name', 'image_main', 'images', 'description'], 'safe'],
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
        $query = Clock::find();

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
            'manufacture' => $this->manufacture,
            'price' => $this->price,
            'gender' => $this->gender,
            'mechanism' => $this->mechanism,
            'type' => $this->type,
            'case_material' => $this->case_material,
            'case_form' => $this->case_form,
            'width' => $this->width,
            'height' => $this->height,
            'depth' => $this->depth,
            'water_resistance' => $this->water_resistance,
            'glass' => $this->glass,
            'watchband' => $this->watchband,
            'time_display' => $this->time_display,
            'dial_symbols' => $this->dial_symbols,
            'color_case' => $this->color_case,
            'color_watchband' => $this->color_watchband,
            'in_stock' => $this->in_stock,
            'count' => $this->count,
            'purchase_price' => $this->purchase_price,
            'hot_price' => $this->hot_price,
            'display' => $this->display,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image_main', $this->image_main])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
