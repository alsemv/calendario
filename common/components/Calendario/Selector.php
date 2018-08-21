<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 10:08 AM
 */

namespace common\components\Calendario;


use yii\helpers\Url;

abstract class Selector
{
    protected $anno;
    protected $mese;
    protected $giorno;
    protected $home_url;
    protected $current_date;

    public function __construct($anno, $mese, $giorno)
    {
        $this->anno = $anno;
        $this->mese = $mese;
        $this->giorno = $giorno;
        $this->home_url = Url::home(true);
        $this->current_date = date('Y/m/d', strtotime('now'));
    }

    abstract public function createSelector();
}