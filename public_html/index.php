<?php
require_once(__DIR__.'/../vendor/autoload.php');
$s = new Site(array(__DIR__.'/../config.ini', __DIR__.'/../localConfig.ini/'));
$s->render();
