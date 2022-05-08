<?php

$a = ["I", "wish", "I", "hadn't", "come"];
function PartsOfList($a)
{
    $newArr = [];
    $arryToReturn = [];
    $aa =  $a;

    $i = 0;
    foreach ($a as $valu) {
        if ($i < count($a) - 1) {
            array_push($newArr, $valu);
            unset($aa[count($a) - count($a) + $i]);
            array_push($arryToReturn, $newArr, $aa);
            $i++;
        } else {
            break;
        }
    }
    $temp = [];
    $y = 0;
    foreach ($arryToReturn as $item) {
        foreach ($item as $value) {
            array_push($temp , $item[$y],$item[$y + 1]);
            $y + 2;
        }
    }
    return $arryToReturn;
}

print_r(PartsOfList($a));
// $mergre = [];
// foreach($arryToReturn as $item){
//     $mergre = array_merge($mergre, $item);
// }
// $implode = implode(" ",$mergre);