<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/15/2018
 * Time: 1:51 PM
 */

namespace common\components\Calendario;

class Calendario
{
    private $selector_type;
    private $grid_type;
    private $calendario_type;
    private $anno;
    private $mese;
    private $giorno;

    public function __construct($selector_type, $grid_type, $calendario_type, $anno, $mese, $giorno)
    {
        $this->selector_type = $selector_type;
        $this->grid_type = $grid_type;
        $this->calendario_type = $calendario_type;
        $this->anno = $anno;
        $this->mese = $mese;
        $this->giorno = $giorno;
    }

    public function drawSelector()
    {
        $selector = CalendarioFactory::factory($this->selector_type, $this->anno, $this->mese, $this->giorno);
        return $selector->createSelector();
    }

    public function drawGrid()
    {
        $grid = CalendarioFactory::factory($this->grid_type, $this->anno, $this->mese, $this->giorno);
        return $grid->createGrid();
    }

    public function drawTypeSwitcher()
    {
        $type_switcher = TypeSwitcher::createTypeSwitcher($this->calendario_type, $this->anno, $this->mese, $this->giorno);
        return $type_switcher;
    }
}