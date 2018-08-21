<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/17/2018
 * Time: 11:13 AM
 */

namespace common\components\Calendario;


class GiornoGrid extends Grid
{
    public function __construct($anno, $mese, $giorno)
    {
        parent::__construct($anno, $mese, $giorno);
    }

    public function createGrid()
    {
        $calendario = '<table width="100%">';
        $calendario .= '<tbody>';

        $day = mktime(0, 0, 0, $this->mese, $this->giorno, $this->anno);
        $current_day = date('Y/m/d', strtotime('now'));
        $calendario_day = date('Y/m/d', $day);
        $is_current_day = $current_day == $calendario_day ? 'current' : '';

        $number_day_week = date('w', $day);
        $title = date('l j F Y', $day);

        $calendario .= '<tr>';
        $calendario .= '<td ';
        if (($number_day_week == 0) || ($number_day_week == 6)) {
            $calendario .= 'class="weekend"';
        }
        $calendario .= '>';
        $calendario .= "<div class=\"title $is_current_day\">$title [new] </div>";

        $calendario .= "<ul>";
        if (isset($data)) {
            foreach ($data as $item) {
                /**
                 * TODO data will be display here
                 */
            }
        } else {
            $calendario .= '<li>-</li>';
        }
        $calendario .= "</ul>";
        $calendario .= '</td>';
        $calendario .= '</tr>';

        $calendario .= '</tbody>';
        $calendario .= '</table>';

        return $calendario;
    }
}