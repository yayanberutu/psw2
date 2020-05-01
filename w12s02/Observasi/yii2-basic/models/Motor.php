<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_motor".
 *
 * @property int $id
 * @property string $name
 * @property double $price
 * @property int $discount
 *
 * @property Order[] $orders
 */
class Motor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_motor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'discount'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'discount' => 'Discount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['motor_id' => 'id']);
    }
}
