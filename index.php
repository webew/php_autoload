<?php

namespace App;

require_once "vendor/autoload.php";

use App\package1\Main as Main1;
use App\package2\Main as Main2;

$main1 = new Main1("ma propriété");
echo $main1->methode();

echo "<hr>";

$main2 = new Main2("ma propriété");
echo $main2->methode();
