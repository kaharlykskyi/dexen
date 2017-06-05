<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glasses".
 *
 * @property integer $id
 * @property string $name
 * @property string $image_main
 * @property string $images
 * @property integer $manufacture
 * @property integer $price
 * @property integer $gender
 * @property integer $form
 * @property integer $form_material
 * @property integer $color_form
 * @property integer $lens_material
 * @property integer $color_lens
 * @property integer $in_stock
 * @property integer $count
 * @property integer $display
 * @property integer $hot_price
 * @property integer $purchase_price
 * @property string $description
 */
class Glasses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'glasses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image_main', 'images', 'manufacture', 'price', 'gender', 'form', 'form_material', 'color_form', 'lens_material', 'color_lens', 'in_stock', 'count', 'display', 'description', 'purchase_price'], 'required'],
            [['images', 'description'], 'string'],
            [['manufacture', 'price', 'gender', 'form', 'form_material', 'color_form', 'lens_material', 'color_lens', 'in_stock', 'count', 'display', 'hot_price', 'purchase_price'], 'integer'],
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
            'form' => 'Форма оправы',
            'form_material' => 'Материал оправы',
            'color_form' => 'Цвет оправы',
            'lens_material' => 'Материал линзы',
            'color_lens' => 'Цвет линзы',
            'in_stock' => 'В наличии',
            'count' => 'Количество',
            'display' => 'Отображать на сайте',
            'purchase_price' => 'Цена закупки',
            'hot_price' => 'Горячая цена',
            'description' => 'Описание',
        ];
    }
}
