<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seminar".
 *
 * @property string $id_seminar
 * @property string $id_account
 * @property string $nama_seminar
 * @property string $tgl_seminar
 * @property string $waktu_seminar
 * @property string $lokasi_seminar
 *
 * @property Peserta[] $pesertas
 * @property Accounts $account
 */
class Seminar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seminar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_seminar'], 'required'],
            [['id_seminar', 'id_account'], 'integer'],
            [['tgl_seminar', 'waktu_seminar'], 'safe'],
            [['nama_seminar'], 'string', 'max' => 100],
            [['lokasi_seminar'], 'string', 'max' => 50],
            [['id_seminar'], 'unique'],
            [['id_account'], 'exist', 'skipOnError' => true, 'targetClass' => Accounts::className(), 'targetAttribute' => ['id_account' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_seminar' => 'Id Seminar',
            'id_account' => 'Id Account',
            'nama_seminar' => 'Nama Seminar',
            'tgl_seminar' => 'Tgl Seminar',
            'waktu_seminar' => 'Waktu Seminar',
            'lokasi_seminar' => 'Lokasi Seminar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesertas()
    {
        return $this->hasMany(Peserta::className(), ['id_seminar' => 'id_seminar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Accounts::className(), ['id' => 'id_account']);
    }
}
