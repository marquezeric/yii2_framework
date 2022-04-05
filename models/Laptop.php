<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laptop".
 *
 * @property string $num_serie
 * @property string $marca
 * @property string $modelo
 * @property string $procesador
 * @property string $memoria
 * @property string $discod
 * @property string $sis_operativo
 *
 * @property Prestamo[] $prestamos
 */
class Laptop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laptop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_serie'], 'required'],
            [['num_serie', 'marca', 'modelo', 'procesador', 'memoria', 'discod', 'sis_operativo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num_serie' => 'Num Serie',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'procesador' => 'Procesador',
            'memoria' => 'Memoria',
            'discod' => 'Discod',
            'sis_operativo' => 'Sis Operativo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamos()
    {
        return $this->hasMany(Prestamo::className(), ['num_serie' => 'num_serie']);
    }
}
