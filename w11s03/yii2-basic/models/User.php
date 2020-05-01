<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_user".
 *
 * @property int $userId
 * @property string $userName
 * @property string $userPassword
 * @property string $userAddress
 * @property string $userRole
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userName', 'userPassword'], 'string', 'max' => 50],
            [['userAddress'], 'string', 'max' => 250],
            [['userRole'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'userName' => 'User Name',
            'userPassword' => 'User Password',
            'userAddress' => 'User Address',
            'userRole' => 'User Role',
        ];
    }
}
