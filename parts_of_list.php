<?php

$a = ["az", "toto", "picaro", "zone", "kiwi"];
function PartsOfList($a)
{
    $newArr = [];
    $aa = $a;
    $ab = $a;
    $i = 0;
    $aArrayCount = count($a);
    foreach ($a as $valu) {
        $aa[$i];
        $i++;
        $aaimpolde = implode(" ", $aa);
        unset($ab[$aArrayCount - $i]);
        $abimplode = implode(" ", $ab);
        array_push($newArr, [$aaimpolde,$abimplode]);
    }           
    return $newArr;
}


print_r(PartsOfList($a));
