<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property int $is_staff
 *
 * @property Members $id0
 * @property Seminar[] $seminars
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'is_staff'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'is_staff' => 'Is Staff',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Members::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeminars()
    {
        return $this->hasMany(Seminar::className(), ['id_account' => 'id']);
    }
}
