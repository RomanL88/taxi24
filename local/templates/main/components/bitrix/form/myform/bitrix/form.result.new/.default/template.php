<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<? if ($arResult["isFormErrors"] == "Y") : ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<? if ($arResult["isFormNote"] != "Y") {
?>
	<?= $arResult["FORM_HEADER"] ?>

	<table>
		<?
		if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") {
		?>
			<tr>
				<td><?
					/***********************************************************************************
					form header
					 ***********************************************************************************/
					if ($arResult["isFormImage"] == "Y") {
					?>
						<a href="<?= $arResult["FORM_IMAGE"]["URL"] ?>" target="_blank" alt="<?= GetMessage("FORM_ENLARGE") ?>"><img src="<?= $arResult["FORM_IMAGE"]["URL"] ?>" <? if ($arResult["FORM_IMAGE"]["WIDTH"] > 300) : ?>width="300" <? elseif ($arResult["FORM_IMAGE"]["HEIGHT"] > 200) : ?>height="200" <? else : ?><?= $arResult["FORM_IMAGE"]["ATTR"] ?><? endif; ?> hspace="3" vscape="3" border="0" /></a>
						<? //=$arResult["FORM_IMAGE"]["HTML_CODE"]
						?>
					<?
					} //endif
					?>

					<p><?= $arResult["FORM_DESCRIPTION"] ?></p>
				</td>
			</tr>
		<?
		} // endif
		?>
	</table>
	<br />
	<?
	/***********************************************************************************
						form questions
	 ***********************************************************************************/
	?>
	<?
	/***********************************************************************************
						ФОРМА ИЗ ВЁРСТКИ
	 */
	?>
	<!-- 	<section class="footer-form" id="feedback">
		<div class="container__form">
			<div data-aos="zoom-in-left" class="form">
			<?= $arResult["FORM_DESCRIPTION"] ?>
				<br>
				<br>
				<form class="feedback_form" name="feedback" method="POST" action="/feedback.php">
					<div>
						<?= $arResult["QUESTIONS"]["NAME_FIELD"]["CAPTION"]; ?>
					</div>
					<?= $arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"]; ?> <br>
					<div>
					<?= $arResult["QUESTIONS"]["PHONE_FIELD"]["CAPTION"]; ?>
					</div>
					<?= $arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"]; ?>
					<input value="" class="tel" name="phone" id="phone" placeholder="Введите номер телефона" required="required">
					<div class="checkbox_form">
						<input type="checkbox" name="chk">
						<div class="conf_text">
							<p>
								Даю согласие на обработку
							</p>
							<a>персональных данных</a>
						</div>
					</div>
					<br>
					<div> -->
	<input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> class="form_btn" type="submit" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />

	<!--		<br>
					</div>
				</form>
			</div>
		</div>
	</section> -->
	<?= $arResult["FORM_FOOTER"] ?>
	<?
	/*										^
					ВЫШЕ - ФОРМА ИЗ ВЁРСТКИ |
	 ***********************************************************************************/
	?>
	<table class="form-table data-table">
		<thead>
			<tr>
				<th colspan="2">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?
			foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
			?>
				<tr>
					<td>
						<? if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])) : ?>
							<span class="error-fld" title="<?= htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID]) ?>"></span>
						<? endif; ?>
						<?= $arQuestion["CAPTION"] ?><? if ($arQuestion["REQUIRED"] == "Y") : ?><?= $arResult["REQUIRED_SIGN"]; ?><? endif; ?>
						<?= $arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />" .  $arQuestion["IMAGE"]["HTML_CODE"] : " " ?>
					</td>
					<td><?= $arQuestion["HTML_CODE"] ?></td>
				</tr>
			<?
			} //endwhile
			?>
			<?
			if ($arResult["isUseCaptcha"] == "Y") {
			?>
				<tr>
					<th colspan="2"><b>
							<?= GetMessage("FORM_CAPTCHA_TABLE_TITLE") ?></b></th>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="captcha_sid" value="<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" width="180" height="40" /></td>
				</tr>
				<tr>
					<td><?= GetMessage("FORM_CAPTCHA_FIELD_TITLE") ?><?= $arResult["REQUIRED_SIGN"]; ?></td>
					<td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
				</tr>
			<?
			} // isUseCaptcha
			?>
		</tbody>
		<tfoot>
			<tr>
				<!-- КНОПКИ -->
				<th colspan="2">
					<input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />
					<? if ($arResult["F_RIGHT"] >= 15) : ?>
						<!-- ОТПРАВИТЬ ЗАЯВКУ -->&nbsp;
						<!-- <input type="hidden" name="web_form_apply" value="Y" /> -->
					<? endif; ?>
				</th>
			</tr>
		</tfoot>
	</table>
	<?= $arResult["FORM_FOOTER"] ?>
<?
	echo '<pre>';
	var_dump($arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"]);
	echo '</pre>';
} //endif (isFormNote)
?>