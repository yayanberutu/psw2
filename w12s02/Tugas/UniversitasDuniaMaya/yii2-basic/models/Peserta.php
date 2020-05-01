<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property string $id_peserta
 * @property string $id_seminar
 * @property string $nama_peserta
 * @property string $status_peserta
 * @property string $prodi_peserta
 *
 * @property Seminar $seminar
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_peserta'], 'required'],
            [['id_peserta', 'id_seminar'], 'integer'],
            [['nama_peserta'], 'string', 'max' => 100],
            [['status_peserta'], 'string', 'max' => 15],
            [['prodi_peserta'], 'string', 'max' => 50],
            [['id_peserta'], 'unique'],
            [['id_seminar'], 'exist', 'skipOnError' => true, 'targetClass' => Seminar::className(), 'targetAttribute' => ['id_seminar' => 'id_seminar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_peserta' => 'Id Peserta',
            'id_seminar' => 'Id Seminar',
            'nama_peserta' => 'Nama Peserta',
            'status_peserta' => 'Status Peserta',
            'prodi_peserta' => 'Prodi Peserta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeminar()
    {
        return $this->hasOne(Seminar::className(), ['id_seminar' => 'id_seminar']);
    }
}
