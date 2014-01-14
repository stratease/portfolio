<?php
require_once(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/../vendor/stratease/emvc/Site.class.php');
$s = new Site([__DIR__.'/../config.ini', __DIR__.'/../localConfig.ini']);
$s->render();
