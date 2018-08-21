<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 11:07 AM
 */

namespace common\components\Calendario;


class MeseGrid extends Grid
{
    public function __construct($anno, $mese, $giorno)
    {
        parent::__construct($anno, $mese, $giorno);
    }

    public function createGrid()
    {
        $month_name = date('F', mktime(0, 0, 0, $this->mese, 1, $this->anno));
        $calendario = '<table width="100%">';
        $calendario .= "<caption>$month_name $this->anno</caption>";
        $calendario .= '<tbody>';

        $running_day = date('w', mktime(0, 0, 0, $this->mese, 1, $this->anno));

        $running_day = $running_day - 1;
        if ($running_day == -1) {
            $running_day = 6;
        }

        $days_in_month = date('t', mktime(0, 0, 0, $this->mese, 1, $this->anno));
        $day_counter = 0;
        $days_in_this_week = 1;

        $calendario .= "<tr>";

        for ($i = 0; $i < $running_day; $i++) {
            $calendario .= '<td></td>';
            $days_in_this_week++;
        }

        for ($list_day = 1; $list_day <= $days_in_month; $list_day++) {
            $calendario .= '<td ';

            if ($running_day != 0) {
                if (($running_day % 5 == 0) || ($running_day % 6 == 0)) {
                    $calendario .= 'class="weekend"';
                }
            }

            $calendario .= '>';

            $title = date('l j', mktime(0, 0, 0, $this->mese, $list_day, $this->anno));
            $calendario_day = date('Y/m/d', mktime(0, 0, 0, $this->mese, $list_day, $this->anno));
            $current_day = date('Y/m/d', strtotime('now'));

            $is_current_day = $current_day == $calendario_day ? 'current' : '';

            $calendario .= "<div class='title $is_current_day'><a href='/calendario/giorno/$calendario_day'>$title</a> [new]</div>";

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

            if ($running_day == 6) {
                $calendario .= '</tr>';

                if (($day_counter + 1) != $days_in_month) {
                    $calendario .= '<tr>';
                }

                $running_day = -1;
                $days_in_this_week = 0;
            }

            $days_in_this_week++;
            $running_day++;
            $day_counter++;

        }

        if ($days_in_this_week < 8) {
            for ($idx = 1; $idx <= (8 - $days_in_this_week); $idx++) {
                $calendario .= '<td> </td>';
            }
        }

        $calendario .= '</tr>';
        $calendario .= '</tbody>';
        $calendario .= '</table>';

        return $calendario;
    }
}