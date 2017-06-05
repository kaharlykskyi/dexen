<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "option".
 *
 * @property integer $id
 * @property string $product_type
 * @property string $field_name
 * @property string $json
 * @property integer $display
 * @property string $description
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_type', 'field_name', 'json', 'display', 'description'], 'required'],
            [['json', 'description'], 'string'],
            [['display'], 'integer'],
            [['product_type'], 'string', 'max' => 1],
            [['field_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_type' => 'Тип продукта',
            'field_name' => 'Название поля',
            'json' => 'json',
            'display' => 'Отображать на сайт',
            'description' => 'Описание',
        ];
    }
}
