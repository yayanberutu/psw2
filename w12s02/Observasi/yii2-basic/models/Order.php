<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_order".
 *
 * @property int $id
 * @property int $motor_id
 * @property int $user_id
 *
 * @property Motor $motor
 * @property User $user
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
            [['id'], 'required'],
            [['id', 'motor_id', 'user_id'], 'integer'],
            [['id'], 'unique'],
            [['motor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Motor::className(), 'targetAttribute' => ['motor_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'motor_id' => 'Motor ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMotor()
    {
        return $this->hasOne(Motor::className(), ['id' => 'motor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
