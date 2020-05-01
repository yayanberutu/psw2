<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_order".
 *
 * @property int $orderId
 * @property int $motorId
 * @property int $userId
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motorId', 'userId'], 'required'],
            [['motorId', 'userId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'motorId' => 'Motor ID',
            'userId' => 'User ID',
        ];
    }
}
