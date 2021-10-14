<?php

namespace oop\test;

require '../unit02/lession-03.php';

use oop\unit02\Test as DemoTest;

class Example extends DemoTest
{

}

$ex = new Example;
echo $ex->demo();