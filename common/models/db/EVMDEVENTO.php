<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "EV_MD_EVENTO".
 *
 * @property string $KEY_MD_EVENTO
 * @property string $DES_MD_EVENTO
 * @property string $CT_EVENTO
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
 * @property EVEVENTO[] $eVEVENTOs
 */
class EVMDEVENTO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'EV_MD_EVENTO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KEY_MD_EVENTO', 'DES_MD_EVENTO', 'CT_EVENTO'], 'required'],
            [['KEY_MD_EVENTO', 'DES_MD_EVENTO', 'CT_EVENTO', 'ST_RECORD', 'SGN', 'UT_INS', 'UT_MOD', 'GID', 'FONTE'], 'string'],
            [['DATA_INIZIO', 'DATA_FINE', 'DT_INS', 'DT_MOD'], 'safe'],
            [['FLAG_VISUALIZZA', 'FLAG_ATTIVO', 'FLAG_READ', 'FLAG_UPDATE', 'FLAG_DELETE', 'ORDINE', 'LIVELLO'], 'integer'],
            [['KEY_MD_EVENTO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KEY_MD_EVENTO' => 'Key  Md  Evento',
            'DES_MD_EVENTO' => 'Des  Md  Evento',
            'CT_EVENTO' => 'Ct  Evento',
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
    public function getEVEVENTOs()
    {
        return $this->hasMany(EVEVENTO::className(), ['KEY_MD_EVENTO' => 'KEY_MD_EVENTO']);
    }
}
