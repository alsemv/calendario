<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/15/2018
 * Time: 3:08 PM
 */

namespace common\components\Calendario;


class SettimanaSelector extends Selector
{
    public function __construct($anno, $mese, $giorno)
    {
        parent::__construct($anno, $mese, $giorno);
    }

    /**
     * @return string
     */
    public function createSelector()
    {
        $next_date = date('Y/m/d', strtotime("$this->anno/$this->mese/$this->giorno + 1 week" ));
        $prev_date = date('Y/m/d', strtotime("$this->anno/$this->mese/$this->giorno - 1 week" ));

        $selectors = "<a href=\"{$this->home_url}calendario/settimana/$prev_date\">Prev</a> ";
        $selectors .= " <a href=\"{$this->home_url}calendario/settimana/$this->current_date\">Current</a> ";
        $selectors .= "<a href=\"{$this->home_url}calendario/settimana/$next_date\">Next</a>";

        return $selectors;
    }
}