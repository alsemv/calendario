<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/17/2018
 * Time: 12:12 PM
 */

namespace common\components\Calendario;


class TypeSwitcher implements GridTypeSwitcherInterface
{
    public static function createTypeSwitcher($type, $anno, $mese, $giorno)
    {
        $types = ['Giorno', 'Settimana', 'Mese', 'Anno'];

        if (!in_array($type, $types)) {
            throw new \InvalidArgumentException('Wrong type passed.');
        }

        $switcher = '<ul class="nav nav-tabs">';
        foreach ($types as $item) {
            $uri = strtolower($item);

            $switcher .= '<li ';
            if ($type == $item)
                $switcher .= 'class="active"';
            $switcher .= '>';
            $switcher .= "<a href='/calendario/$uri/$anno/$mese/$giorno'>$item</a></li>";
        }
        $switcher .= '</ul>';

        return $switcher;
    }
}