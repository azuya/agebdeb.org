<?php

defined('SYSPATH') or die('No direct script access.');

$links = array(
    "accueil" => HTML::anchor("", "Accueil"),
    "comites" => HTML::anchor("comites", "Comités"),
    "elections" => HTML::anchor("elections", "Élections du Conseil Exécutif 2013-2014")
);
?>

<div class="navbar navbar-inverse navbar-static-top">

    <div class="navbar-inner">
        <div class="container">
            <?php echo Request::current()->uri() ?>
            <?php echo Bootstrap::navs($links, Request::current()->controller()) ?>


        </div>

    </div>
</div>
