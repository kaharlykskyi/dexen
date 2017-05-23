<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $date
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $city
 * @property string $region
 * @property string $address
 * @property string $tel
 * @property string $pay_type
 * @property string $comment
 * @property integer $status
 *
 * @property Position[] $positions
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['first_name', 'last_name', 'email', 'city', 'region', 'address', 'tel', 'pay_type', 'status'], 'required'],
            [['address', 'comment'], 'string'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'email', 'city', 'region'], 'string', 'max' => 255],
            [['tel', 'pay_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Email',
            'city' => 'Город',
            'region' => 'Область',
            'address' => 'Адресс',
            'tel' => 'Телефон',
            'pay_type' => 'Способ оплаты',
            'comment' => 'Комментарий',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasMany(Position::className(), ['order_id' => 'id']);
    }
}
