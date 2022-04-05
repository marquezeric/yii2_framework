<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prestamo".
 *
 * @property integer $id_prestamo
 * @property string $fec_prestamo
 * @property string $fec_devolucion
 * @property string $usr_responsable
 * @property string $usr_solicitante
 * @property string $num_serie
 * @property string $observaciones
 *
 * @property Laptop $numSerie
 * @property Usuario $usrResponsable
 */
class Prestamo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestamo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fec_prestamo', 'fec_devolucion'], 'safe'],
            [['usr_responsable', 'num_serie'], 'required'],
            [['usr_responsable', 'usr_solicitante', 'num_serie', 'observaciones'], 'string', 'max' => 255],
            [['num_serie'], 'exist', 'skipOnError' => true, 'targetClass' => Laptop::className(), 'targetAttribute' => ['num_serie' => 'num_serie']],
            [['usr_responsable'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usr_responsable' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prestamo' => 'Id Prestamo',
            'fec_prestamo' => 'Fec Prestamo',
            'fec_devolucion' => 'Fec Devolucion',
            'usr_responsable' => 'Usr Responsable',
            'usr_solicitante' => 'Usr Solicitante',
            'num_serie' => 'Num Serie',
            'observaciones' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNumSerie()
    {
        return $this->hasOne(Laptop::className(), ['num_serie' => 'num_serie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsrResponsable()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'usr_responsable']);
    }
}
