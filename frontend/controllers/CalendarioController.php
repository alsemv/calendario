<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/15/2018
 * Time: 9:45 AM
 */

namespace frontend\controllers;


use common\components\Calendario\Calendario;
use common\models\readModels\EV_EVENTO;
use yii\base\Module;
use yii\web\Controller;

class CalendarioController extends Controller
{
    private $anno;
    private $mese;
    private $giorno;

    public function __construct($id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);

        $now = strtotime('now');
        $this->anno = date('Y', $now);
        $this->mese = date('m', $now);
        $this->giorno = date('d', $now);
    }

    public function actionGiorno()
    {
        $calendario = new Calendario('GiornoSelector', 'GiornoGrid', 'Giorno', $this->anno, $this->mese, $this->giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionGiornoDate($anno, $mese, $giorno)
    {
        $calendario = new Calendario('GiornoSelector', 'GiornoGrid', 'Giorno', $anno, $mese, $giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }


    public function actionSettimana()
    {
        $calendario = new Calendario('SettimanaSelector', 'SettimanaGrid', 'Settimana', $this->anno, $this->mese, $this->giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionSettimanaDate($anno, $mese, $giorno)
    {
        $calendario = new Calendario('SettimanaSelector', 'SettimanaGrid', 'Settimana', $anno, $mese, $giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionMese()
    {
        $calendario = new Calendario('MeseSelector', 'MeseGrid', 'Mese', $this->anno, $this->mese, $this->giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionMeseDate($anno, $mese, $giorno)
    {
        $calendario = new Calendario('MeseSelector', 'MeseGrid', 'Mese', $anno, $mese, $giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionAnno()
    {
        $calendario = new Calendario('AnnoSelector', 'AnnoGrid', 'Anno', $this->anno, $this->mese, $this->giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionAnnoDate($anno, $mese, $giorno)
    {
        $calendario = new Calendario('AnnoSelector', 'AnnoGrid', 'Anno', $anno, $mese, $giorno);
        return $this->render('index', ['calendario' => $calendario]);
    }

    public function actionRange()
    {
//        $begin = new \DateTime('2010-10-01');
//        $end = new \DateTime('2010-10-05');
//        $interval = new \DateInterval('P1D');
//
//        $period = new \DatePeriod($begin, $interval, $end);
//
//        foreach ($period as $value) {
//            var_dump($value->format('Y-m-d'));
//        }

        $model = new EV_EVENTO();
        $result = $model->getEntriesPerPeriod('2011-01-01', '2011-04-01');
        var_dump($result);
        die();
    }

}