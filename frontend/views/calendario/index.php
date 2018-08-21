<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper2
 * Date: 8/16/2018
 * Time: 11:21 AM
 */
?>

<style>
    table {
        border-collapse: separate;
        border-spacing: 5px;
    }
    table caption {
        background: #b0c4de;
        color: #003366;
        text-align: center;
        margin-top: 20px;
    }

    table .title{
        background: #c4dcf4;
        color: #033b6c;
        font-size: 13px;
        padding: 2px 0 2px 5px;
    }

    table td.weekend .title
    {
        background: #1c4f83;
        color: #fff;
    }
    table td.weekend .title a {
        color: #fff;
    }
    table ul {
        list-style: none;
        padding-left: 10px;
    }

    table .title.current{
        background: #FC7A26;
        color: #003366;
    }
    table a{
        color: #033b6c;
    }
    table a:hover{
        text-decoration: none;
    }
</style>

<h2>Calendario</h2>


    <div class="col-md-4"></div>
    <div class="col-md-4"><?= $calendario->drawTypeSwitcher(); ?></div>
    <div class="col-md-4 selector">   <?= $calendario->drawSelector(); ?></div>



<div class="calendario-grid">
    <?= $calendario->drawGrid(); ?>
</div>