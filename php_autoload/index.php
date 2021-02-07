<?php

namespace App;

require_once "autoload.php";

use classes\package1\Main as Main1;
use classes\package2\Main as Main2;

$main1 = new Main1("ma propriété");
echo $main1->methode();

echo "<hr>";

$main2 = new Main2("ma propriété");
echo $main2->methode();
