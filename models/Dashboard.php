<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dashboard".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property int $prodi
 */
class Dashboard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dashboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'prodi'], 'required'],
            [['prodi'], 'integer'],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'prodi' => 'Prodi',
        ];
    }
}
