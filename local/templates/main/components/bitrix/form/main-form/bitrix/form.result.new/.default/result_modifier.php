<?php
/* $arResult["FORM_HEADER"] = '<form class="feedback_form" name="feedback" method="POST" action="/feedback.php">';
$arResult["FORM_FOOTER"] = '</form>';
 */
//$arResult["FORM_HEADER"] = preg_replace("#<form#", "<form class='feedback_form' name='feedback' method='POST' action='/feedback.php'>", $arResult["FORM_HEADER"]);
str_replace('<form', '<form class="feedback_form"', $arResult["FORM_HEADER"]);
str_replace('<input', '<input class="tel"', $arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"]);
$arResult["QUESTIONS"]["NAME_FIELD"]["HTML_CODE"] = '<input type="text" name="name" placeholder="Введите имя" required="required">';
$arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"] = '<input value="" class="tel" name="phone" id="phone" placeholder="Введите номер телефона" required="required">';
$arResult["QUESTIONS"]["SEND_DATA"]["HTML_CODE"] = '<input type="checkbox" name="chk">';
