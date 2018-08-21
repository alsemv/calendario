<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 2:55 PM
 */

namespace common\components\Calendario;


class AnnoGrid extends Grid
{
    public function __construct($anno, $mese, $giorno)
    {
        parent::__construct($anno, $mese, $giorno);
    }

    public function createGrid()
    {
        $calendario = '<table width="100%">';
        $calendario .= "<caption>$this->anno</caption>";
        $calendario .= '<tbody>';
        $calendario .= "<tr>";

        $month_in_year = 12;

        for ($month = 1; $month <= $month_in_year; $month++) {
            $month_name = date('M', mktime(0, 0, 0, $month, 1, $this->anno));

            $calendario .= '<td valign="top">';
            $calendario .= "<div class='title' style='background: #b0c4de'>$month_name</div>";
            $calendario .= '<table width="100%" style="border-spacing:0">';
            $calendario .= '<tbody>';

            $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $this->anno));

            for ($list_day = 1; $list_day <= $days_in_month; $list_day++) {

                $day_of_week = date('w', mktime(0, 0, 0, $month, $list_day, $this->anno));
                $calendario_day = date('Y/m/d', mktime(0, 0, 0, $month, $list_day, $this->anno));
                $current_day = date('Y/m/d', strtotime('now'));

                $is_current_day = $current_day == $calendario_day ? 'current' : '';

                $calendario .= '<tr>';

                $calendario .= '<td ';

                if (($day_of_week == 0) || ($day_of_week == 6)) {
                    $calendario .= 'class="weekend"';
                }

                $calendario .= '>';

                $title = date('j D', mktime(0, 0, 0, $month, $list_day, $this->anno));

                $calendario .= "<div class='title $is_current_day' style='text-align: left'><a href='/calendario/giorno/$calendario_day'>$title</a></div>";

                $calendario .= '</td>';
                $calendario .= '</tr>';

            }

            $calendario .= '</tbody>';
            $calendario .= '</table>';
            $calendario .= '</td>';
        }

        $calendario .= '</tr>';
        $calendario .= '</tbody>';
        $calendario .= '</table>';

        return $calendario;
    }
}