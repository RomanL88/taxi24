<?php
$counter = 1;

foreach ($arResult["ITEMS"] as $kItem => $arItem) {
    $arResult["ITEMS"][$kItem]["NUMBER"] = '0' . $arItem['ID'] . '.';
    $counter++;
    sprintf();
}
