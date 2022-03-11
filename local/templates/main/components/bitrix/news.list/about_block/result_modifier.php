<?php
$counter = 1;
$divCounter = 1;
foreach ($arResult["ITEMS"] as $kItem => $arItem) {

    /* ПОРЯДКОВЫЙ НОМЕР */
    $arResult["ITEMS"][$kItem]["NUMBER"] = sprintf("%'.02d.", $counter);

    /* АНИМАЦИЯ */

    switch ($divCounter) {
        case 1:
            $arResult["ITEMS"][$kItem]["AOS_CONTAINER"] = "fade-down";
            $arResult["ITEMS"][$kItem]["CLASS_BLOCK"] = "card-container";
            $arResult["ITEMS"][$kItem]["AOS_HEADING"] = "";
            $arResult["ITEMS"][$kItem]["AOS_DESCRIPTION"] = "";
            $arResult["ITEMS"][$kItem]["AOS_IMAGE"] = "";
            break;

        case 2:
            $arResult["ITEMS"][$kItem]["AOS_CONTAINER"] = "";
            $arResult["ITEMS"][$kItem]["CLASS_BLOCK"] = "card-container card-container__noBg_reverse";
            $arResult["ITEMS"][$kItem]["AOS_HEADING"] = "fade-right";
            $arResult["ITEMS"][$kItem]["AOS_DESCRIPTION"] = "fade-left";
            $arResult["ITEMS"][$kItem]["AOS_IMAGE"] = "fade-right";
            break;

        case 3:
            $arResult["ITEMS"][$kItem]["AOS_CONTAINER"] = "fade-up";
            $arResult["ITEMS"][$kItem]["CLASS_BLOCK"] = "card-container";
            $arResult["ITEMS"][$kItem]["AOS_HEADING"] = "";
            $arResult["ITEMS"][$kItem]["AOS_DESCRIPTION"] = "";
            $arResult["ITEMS"][$kItem]["AOS_IMAGE"] = "";
            break;
    }
    /* сбросить счётчик $divCounter */
    if ($divCounter == 3) {
        $divCounter = 1;
    } else {
        $divCounter++;
    }

    $counter++;
}
