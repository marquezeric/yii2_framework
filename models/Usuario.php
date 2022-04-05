<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $id_usuario
 * @property string $tip_usr
 * @property string $nombre
 * @property string $direccion
 * @property string $area
 *
 * @property Prestamo[] $prestamos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario'], 'required'],
            [['id_usuario', 'nombre', 'direccion', 'area'], 'string', 'max' => 255],
            [['tip_usr'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'tip_usr' => 'Tip Usr',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'area' => 'Area',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamos()
    {
        return $this->hasMany(Prestamo::className(), ['usr_responsable' => 'id_usuario']);
    }
}
