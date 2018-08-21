<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "EV_EVENTO".
 *
 * @property int $KEY_EVENTO
 * @property string $KEY_GR_EVENTO
 * @property string $KEY_CT_EVENTO
 * @property int $KEY_TP_EVENTO
 * @property string $KEY_MD_EVENTO
 * @property string $KEY_ST_EVENTO
 * @property string $DES_EVENTO
 * @property string $COD_AZIENDA
 * @property string $KEY_ANAGRAFICA
 * @property int $KEY_UTENTE
 * @property string $DATA_EVENTO
 * @property string $ORA_EVENTO
 * @property string $DATA_TERMINE
 * @property string $ORA_TERMINE
 * @property int $FLAG_PROMEMORIA
 * @property string $DATA_PROMEMORIA
 * @property string $ORA_PROMEMORIA
 * @property string $LUOGO
 * @property string $RIFERIMENTO
 * @property string $NOTE
 * @property int $PKEY_EVENTO
 * @property int $FLAG_PERSONALE
 * @property int $FLAG_CHIUSO
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
 * @property EVCTEVENTO $kEYCTEVENTO
 * @property EVTPEVENTO $kEYTPEVENTO
 * @property EVMDEVENTO $kEYMDEVENTO
 * @property EVSTEVENTO $kEYSTEVENTO
 */
class EVEVENTO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'EV_EVENTO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KEY_GR_EVENTO', 'KEY_CT_EVENTO', 'KEY_MD_EVENTO', 'KEY_ST_EVENTO', 'DES_EVENTO', 'COD_AZIENDA', 'KEY_ANAGRAFICA', 'LUOGO', 'RIFERIMENTO', 'NOTE', 'ST_RECORD', 'SGN', 'UT_INS', 'UT_MOD', 'GID', 'FONTE'], 'string'],
            [['KEY_CT_EVENTO'], 'required'],
            [['KEY_TP_EVENTO', 'KEY_UTENTE', 'FLAG_PROMEMORIA', 'PKEY_EVENTO', 'FLAG_PERSONALE', 'FLAG_CHIUSO', 'FLAG_VISUALIZZA', 'FLAG_ATTIVO', 'FLAG_READ', 'FLAG_UPDATE', 'FLAG_DELETE', 'ORDINE', 'LIVELLO'], 'integer'],
            [['DATA_EVENTO', 'ORA_EVENTO', 'DATA_TERMINE', 'ORA_TERMINE', 'DATA_PROMEMORIA', 'ORA_PROMEMORIA', 'DATA_INIZIO', 'DATA_FINE', 'DT_INS', 'DT_MOD'], 'safe'],
            [['KEY_GR_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVGREVENTO::className(), 'targetAttribute' => ['KEY_GR_EVENTO' => 'KEY_GR_EVENTO']],
            [['KEY_CT_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVCTEVENTO::className(), 'targetAttribute' => ['KEY_CT_EVENTO' => 'KEY_CT_EVENTO']],
           /* [['KEY_TP_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVTPEVENTO::className(), 'targetAttribute' => ['KEY_TP_EVENTO' => 'KEY_TP_EVENTO']],*/
            [['KEY_MD_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVMDEVENTO::className(), 'targetAttribute' => ['KEY_MD_EVENTO' => 'KEY_MD_EVENTO']],
            [['KEY_ST_EVENTO'], 'exist', 'skipOnError' => true, 'targetClass' => EVSTEVENTO::className(), 'targetAttribute' => ['KEY_ST_EVENTO' => 'KEY_ST_EVENTO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KEY_EVENTO' => 'Key  Evento',
            'KEY_GR_EVENTO' => 'Key  Gr  Evento',
            'KEY_CT_EVENTO' => 'Key  Ct  Evento',
            'KEY_TP_EVENTO' => 'Key  Tp  Evento',
            'KEY_MD_EVENTO' => 'Key  Md  Evento',
            'KEY_ST_EVENTO' => 'Key  St  Evento',
            'DES_EVENTO' => 'Des  Evento',
            'COD_AZIENDA' => 'Cod  Azienda',
            'KEY_ANAGRAFICA' => 'Key  Anagrafica',
            'KEY_UTENTE' => 'Key  Utente',
            'DATA_EVENTO' => 'Data  Evento',
            'ORA_EVENTO' => 'Ora  Evento',
            'DATA_TERMINE' => 'Data  Termine',
            'ORA_TERMINE' => 'Ora  Termine',
            'FLAG_PROMEMORIA' => 'Flag  Promemoria',
            'DATA_PROMEMORIA' => 'Data  Promemoria',
            'ORA_PROMEMORIA' => 'Ora  Promemoria',
            'LUOGO' => 'Luogo',
            'RIFERIMENTO' => 'Riferimento',
            'NOTE' => 'Note',
            'PKEY_EVENTO' => 'Pkey  Evento',
            'FLAG_PERSONALE' => 'Flag  Personale',
            'FLAG_CHIUSO' => 'Flag  Chiuso',
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
    public function getKEYCTEVENTO()
    {
        return $this->hasOne(EVCTEVENTO::className(), ['KEY_CT_EVENTO' => 'KEY_CT_EVENTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
  /*  public function getKEYTPEVENTO()
    {
        return $this->hasOne(EVTPEVENTO::className(), ['KEY_TP_EVENTO' => 'KEY_TP_EVENTO']);
    }*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKEYMDEVENTO()
    {
        return $this->hasOne(EVMDEVENTO::className(), ['KEY_MD_EVENTO' => 'KEY_MD_EVENTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKEYSTEVENTO()
    {
        return $this->hasOne(EVSTEVENTO::className(), ['KEY_ST_EVENTO' => 'KEY_ST_EVENTO']);
    }
}
