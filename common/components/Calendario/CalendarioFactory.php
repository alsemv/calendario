<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 8:27 AM
 */

namespace common\components\Calendario;


class CalendarioFactory
{
    public static function factory($type, $anno, $mese, $giorno)
    {
        $class_name = 'common\components\Calendario\\' . $type;

        if (!class_exists($class_name)) {
            throw new \InvalidArgumentException('Wrong type passed.');
        }

        return new $class_name($anno, $mese, $giorno);
    }
}