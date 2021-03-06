<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Portmone;

/**
 * PortmoneSearch represents the model behind the search form about `app\models\Portmone`.
 */
class PortmoneSearch extends Portmone
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'manufacture', 'price', 'gender', 'material', 'width', 'heigth', 'depth', 'type', 'in_stock', 'count', 'display', 'purchase_price', 'hot_price'], 'integer'],
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
        $query = Portmone::find();

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
            'material' => $this->material,
            'width' => $this->width,
            'heigth' => $this->heigth,
            'depth' => $this->depth,
            'type' => $this->type,
            'in_stock' => $this->in_stock,
            'count' => $this->count,
            'display' => $this->display,
            'purchase_price' => $this->purchase_price,
            'hot_price' => $this->hot_price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image_main', $this->image_main])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
