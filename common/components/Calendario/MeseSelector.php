<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/15/2018
 * Time: 4:11 PM
 */

namespace common\components\Calendario;


class MeseSelector extends Selector
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
        $next_date = date('Y/m/d', strtotime("$this->anno/$this->mese/$this->giorno + 1 month" ));
        $prev_date = date('Y/m/d', strtotime("$this->anno/$this->mese/$this->giorno - 1 month" ));

        $selectors = "<a href=\"{$this->home_url}calendario/mese/$prev_date\">Prev</a> ";
        $selectors .= " <a href=\"{$this->home_url}calendario/mese/$this->current_date\">Current</a> ";
        $selectors .= "<a href=\"{$this->home_url}calendario/mese/$next_date\">Next</a>";

        return $selectors;
    }
}