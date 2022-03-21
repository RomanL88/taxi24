<?php
/* $arResult["FORM_HEADER"] = '<form class="feedback_form" name="feedback" method="POST" action="/feedback.php">';
$arResult["FORM_FOOTER"] = '</form>';
 */
//$arResult["FORM_HEADER"] = preg_replace("#<form#", "<form class='feedback_form' name='feedback' method='POST' action='/feedback.php'>", $arResult["FORM_HEADER"]);
$arResult["FORM_HEADER"] = str_replace('<form', '<form class="feedback_form"', $arResult["FORM_HEADER"]);
