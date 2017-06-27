<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portmone".
 *
 * @property integer $id
 * @property string $name
 * @property string $image_main
 * @property string $images
 * @property integer $manufacture
 * @property integer $price
 * @property integer $gender
 * @property integer $material
 * @property integer $width
 * @property integer $heigth
 * @property integer $depth
 * @property integer $type
 * @property integer $in_stock
 * @property integer $count
 * @property integer $display
 * @property integer $hot_price
 * @property integer $purchase_price
 * @property string $description
 */
class Portmone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portmone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image_main', 'images', 'manufacture', 'price', 'gender', 'material', 'width', 'heigth', 'depth', 'type', 'in_stock', 'count', 'hot_price', 'purchase_price', 'display', 'description'], 'required'],
            [['images', 'description'], 'string'],
            [['manufacture', 'price', 'gender', 'material', 'width', 'heigth', 'depth', 'type', 'in_stock', 'count', 'display', 'purchase_price', 'hot_price'], 'integer'],
            [['name', 'image_main'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'image_main' => 'Основное фото',
            'images' => 'Доп. фото',
            'manufacture' => 'Производитель',
            'price' => 'Цена',
            'gender' => 'Пол',
            'material' => 'Материал',
            'width' => 'Ширина',
            'heigth' => 'Высота',
            'depth' => 'Толщина',
            'type' => 'Тип',
            'in_stock' => 'В наличии',
            'count' => 'Количество',
            'display' => 'Отображать на сайте',
            'purchase_price' => 'Цена закупки',
            'hot_price' => 'Горячая цена',
            'description' => 'Описание',
        ];
    }
}
