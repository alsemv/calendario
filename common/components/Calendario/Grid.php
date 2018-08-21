<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 10:53 AM
 */

namespace common\components\Calendario;


abstract class Grid
{
    protected $anno;
    protected $mese;
    protected $giorno;

    public function __construct($anno, $mese, $giorno)
    {
        $this->anno = $anno;
        $this->mese = $mese;
        $this->giorno = $giorno;
    }

    abstract public function createGrid();
}