<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="system-nav-orange">

    <? if ($arResult["bDescPageNumbering"] === true) : ?>


        <div class="nav-pages">





            <? if ($arResult["NavPageNomer"] > 1) : ?>
                |&nbsp;<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">&raquo;</a>&nbsp;|&nbsp;
            <? endif ?>

        <? else : ?>

            <div class="nav-pages">



                <? if ($arResult["bSavePage"]) : ?>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">&laquo;</a>
                    &nbsp;|&nbsp;
                <? else : ?>
                    <? if ($arResult["NavPageNomer"] > 2) : ?>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">&laquo;</a>
                    <? else : ?>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">&laquo;</a>
                    <? endif ?>
                    &nbsp;|&nbsp;
                <? endif ?>


                <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]) : ?>

                    <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) : ?>
                        <span class="nav-current-page">&nbsp;<?= $arResult["nStartPage"] ?>&nbsp;</span>&nbsp;
                    <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) : ?>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>&nbsp;
                    <? else : ?>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>&nbsp;
                    <? endif ?>
                    <? $arResult["nStartPage"]++ ?>
                <? endwhile ?>



                |&nbsp;<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">&raquo;</a>&nbsp;|&nbsp;


            <? endif ?>


            <? if ($arResult["bShowAll"]) : ?>
                <noindex>
                    <? if ($arResult["NavShowAll"]) : ?>
                        |&nbsp;<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=0" rel="nofollow"><?= GetMessage("nav_paged") ?></a>&nbsp;
                    <? else : ?>
                        |&nbsp;<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"] ?>=1" rel="nofollow"><?= GetMessage("nav_all") ?></a>&nbsp;
                    <? endif ?>
                </noindex>
            <? endif ?>

            </div>

        </div>