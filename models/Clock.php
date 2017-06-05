<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clock".
 *
 * @property integer $id
 * @property string $name
 * @property string $image_main
 * @property string $images
 * @property integer $manufacture
 * @property integer $price
 * @property integer $gender
 * @property integer $mechanism
 * @property integer $type
 * @property integer $case_material
 * @property integer $case_form
 * @property integer $width
 * @property integer $height
 * @property integer $depth
 * @property integer $water_resistance
 * @property integer $glass
 * @property integer $watchband
 * @property integer $time_display
 * @property integer $dial_symbols
 * @property integer $color_case
 * @property integer $color_watchband
 * @property integer $in_stock
 * @property integer $count
 * @property integer $hot_price
 * @property integer $purchase_price
 * @property integer $display
 * @property string $description
 */
class Clock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image_main', 'images', 'manufacture', 'price', 'gender', 'mechanism', 'type', 'case_material', 'case_form', 'width', 'height', 'depth', 'water_resistance', 'glass', 'watchband', 'time_display', 'dial_symbols', 'color_case', 'color_watchband', 'in_stock', 'count', 'purchase_price', 'hot_price', 'display', 'description'], 'required'],
            [['images', 'description'], 'string'],
            [['manufacture', 'price', 'gender', 'mechanism', 'type', 'case_material', 'case_form', 'width', 'height', 'depth', 'water_resistance', 'glass', 'watchband', 'time_display', 'dial_symbols', 'color_case', 'color_watchband', 'in_stock','purchase_price', 'hot_price', 'count', 'display'], 'integer'],
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
            'image_main' => 'Главное фото',
            'images' => 'Доп. фото',
            'manufacture' => 'Производитель',
            'price' => 'Цена',
            'gender' => 'Пол',
            'mechanism' => 'Механизм',
            'type' => 'Тип',
            'case_material' => 'Материал корпуса',
            'case_form' => 'Форма корпуса',
            'width' => 'Ширина',
            'height' => 'Висота',
            'depth' => 'Толщина',
            'water_resistance' => 'Водонепроницаемость',
            'glass' => 'Стекло',
            'watchband' => 'Браслет/ремешок',
            'time_display' => 'Индикация времени',
            'dial_symbols' => 'Тип символов на циферблате',
            'color_case' => 'Цвет корпуса',
            'color_watchband' => 'Цвет браслета/ремешка',
            'in_stock' => 'В наличие',
            'count' => 'Количество',
            'purchase_price' => 'Цена закупки',
            'hot_price' => 'Горячая цена',
            'display' => 'Отображать на сайте',
            'description' => 'Описание',
        ];
    }
}
