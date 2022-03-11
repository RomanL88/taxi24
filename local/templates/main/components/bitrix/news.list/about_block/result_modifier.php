<?php
$counter = 1;
$divCounter = 1;
foreach ($arResult["ITEMS"] as $kItem => $arItem) {

    /* ПОРЯДКОВЫЙ НОМЕР */
    $arResult["ITEMS"][$kItem]["NUMBER"] = sprintf("%'.02d.", $counter);

    /* АНИМАЦИЯ */
    $aosContainer = '';
    $classBlock = '';
    $aosHeading = '';
    $aosDescription = '';
    $aosImage = '';

    switch ($divCounter) {
        case 1:
            $aosContainer = "fade-down";
            break;

        case 2:
            $classBlock = " card-container__noBg_reverse";
            $aosHeading = "fade-right";
            $aosDescription = "fade-left";
            $aosImage = "fade-right";
            break;

        case 3:
            $aosContainer = "fade-up";
            break;
    }

    $arResult["ITEMS"][$kItem]["AOS_CONTAINER"]   = $aosContainer;
    $arResult["ITEMS"][$kItem]["CLASS_BLOCK"]     = $classBlock;
    $arResult["ITEMS"][$kItem]["AOS_HEADING"]     = $aosHeading;
    $arResult["ITEMS"][$kItem]["AOS_DESCRIPTION"] = $aosDescription;
    $arResult["ITEMS"][$kItem]["AOS_IMAGE"]       = $aosImage;

    /* счётчики */
    if ($divCounter == 3) {
        $divCounter = 1;
    } else {
        $divCounter++;
    }

    $counter++;
}
