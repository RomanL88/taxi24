<?php
$counter = 1;
foreach ($arResult["ITEMS"] as $kItem => $arItem) {
    $arResult["ITEMS"][$kItem]["NUMBER"] = sprintf("0%u.", $counter);
    $counter++;
}
