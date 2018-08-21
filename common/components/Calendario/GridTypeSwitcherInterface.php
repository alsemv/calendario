<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/17/2018
 * Time: 12:04 PM
 */

namespace common\components\Calendario;


interface GridTypeSwitcherInterface
{
    public static function createTypeSwitcher($type, $anno, $mese, $giorno);
}