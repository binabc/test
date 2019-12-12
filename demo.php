<?php

require_once "./vendor/autoload.php";

use Binabc\Test\Tools;
use Binabc\Test\Abc\Abcd;

$tools = new Tools();
$tools->test();

$aa = new Abcd();
$aa->test();