<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/20/2018
 * Time: 3:56 PM
 */

namespace common\models\readModels;


use common\models\db\EVEVENTO;
use yii\db\ActiveRecord;

class EV_EVENTO
{


    public function getEntriesPerPeriod($start, $end)
    {
        $model = EVEVENTO::find()->where(['<=', 'DATA_EVENTO', $start])->andWhere(['>=', 'DATA_TERMINE', $end])->one();
        return $model;
    }
}