<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/17/2018
 * Time: 9:19 AM
 */

namespace common\components\Calendario;


class SettimanaGrid extends Grid
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

        $week_days = [
            'monday' => strtotime('monday this week', $day),
            'tuesday' => strtotime('tuesday this week', $day),
            'wednesday' => strtotime('wednesday this week', $day),
            'thursday' => strtotime('thursday this week', $day),
            'friday' => strtotime('friday this week', $day),
            'saturday' => strtotime('saturday this week', $day),
            'sunday' => strtotime('sunday this week', $day)
        ];

        foreach ($week_days as $day) {
            $title = date('l j F', $day);
            $number_day_week = date('w', $day);
            $calendario_day = date('Y/m/d', $day);
            $is_current_day = $current_day == $calendario_day ? 'current' : '';

            $calendario .= '<tr>';
            $calendario .= '<td ';
            if (($number_day_week == 0) || ($number_day_week == 6)) {
                $calendario .= 'class="weekend"';
            }
            $calendario .= '>';
            $calendario .= "<div class=\"title $is_current_day\"><a href='/calendario/giorno/$calendario_day'>$title</a> [new] </div>";

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
        }

        $calendario .= '</tbody>';
        $calendario .= '</table>';

        return $calendario;
    }
}