<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "EV_CT_EVENTO".
 *
 * @property string $KEY_CT_EVENTO
 * @property string $DES_CT_EVENTO
 * @property string $KEY_GR_EVENTO
 * @property string $DATA_INIZIO
 * @property string $DATA_FINE
 * @property int $FLAG_VISUALIZZA
 * @property int $FLAG_ATTIVO
 * @property int $FLAG_READ
 * @property int $FLAG_UPDATE
 * @property int $FLAG_DELETE
 * @property int $ORDINE
 * @property string $ST_RECORD
 * @property string $SGN
 * @property string $DT_INS
 * @property string $UT_INS
 * @property string $DT_MOD
 * @property string $UT_MOD
 * @property string $GID
 * @property int $LIVELLO
 * @property string $FONTE
 *
 * @property EVGREVENTO $kEYGREVENTO
 * @property EVEVENTO[] $eVEVENTOs
 */
class EVCTEVENTO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'EV_CT_EVENTO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KEY_CT_EVENTO', 'DES_CT_EVENTO', 'KEY_GR_EVENTO'], 'required'],
            [['KEY_CT_EVENTO', 'DES_CT_EVENTO', 'KEY_GR_EVENTO', 'ST_RECORD', 'SGN', 'UT_INS', 'UT_MOD', 'GID', 'FONTE'], 'string'],
            [['DATA_INIZIO', 'DATA_FINE', 'DT_INS', 'DT_MOD'], 'safe'],
            [['FLAG_VISUALIZZA', 'FLAG_ATTIVO', 'FLAG_READ', 'FLAG_UPDATE', 'FLAG_DELETE', 'ORDINE', 'LIVELLO'], 'integer'],
            [['KEY_CT_EVENTO'], 'unique'],
            [['KEY_GR_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVGREVENTO::className(), 'targetAttribute' => ['KEY_GR_EVENTO' => 'KEY_GR_EVENTO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KEY_CT_EVENTO' => 'Key  Ct  Evento',
            'DES_CT_EVENTO' => 'Des  Ct  Evento',
            'KEY_GR_EVENTO' => 'Key  Gr  Evento',
            'DATA_INIZIO' => 'Data  Inizio',
            'DATA_FINE' => 'Data  Fine',
            'FLAG_VISUALIZZA' => 'Flag  Visualizza',
            'FLAG_ATTIVO' => 'Flag  Attivo',
            'FLAG_READ' => 'Flag  Read',
            'FLAG_UPDATE' => 'Flag  Update',
            'FLAG_DELETE' => 'Flag  Delete',
            'ORDINE' => 'Ordine',
            'ST_RECORD' => 'St  Record',
            'SGN' => 'Sgn',
            'DT_INS' => 'Dt  Ins',
            'UT_INS' => 'Ut  Ins',
            'DT_MOD' => 'Dt  Mod',
            'UT_MOD' => 'Ut  Mod',
            'GID' => 'Gid',
            'LIVELLO' => 'Livello',
            'FONTE' => 'Fonte',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKEYGREVENTO()
    {
        return $this->hasOne(EVGREVENTO::className(), ['KEY_GR_EVENTO' => 'KEY_GR_EVENTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEVEVENTOs()
    {
        return $this->hasMany(EVEVENTO::className(), ['KEY_CT_EVENTO' => 'KEY_CT_EVENTO']);
    }
}
