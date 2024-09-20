<?php

$summn  = 0;
$summadd = 0;
$daysn = 30;
$percent = 0.1;
$daysy = 365;

if (isset($_POST["summa"])) {
    $summn = $_POST["summa"];
    if ($_POST["additing"] == "yes") {
        $summadd = $_POST["summa_adding"];
    };
};


var_dump($summn = $summn - 1 + ($summn - 1 + $summadd) * $daysn * ($percent / $daysy));
