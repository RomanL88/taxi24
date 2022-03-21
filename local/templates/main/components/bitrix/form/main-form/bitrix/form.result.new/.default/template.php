<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["isFormErrors"] == "Y") : ?>
    <?= $arResult["FORM_ERRORS_TEXT"]; ?>
<? endif; ?>

<section class="footer-form" id="feedback">
    <div class="container__form">
        <div data-aos="zoom-in-left" class="form">
            <?= $arResult["arForm"]["DESCRIPTION"] ?>
            <br><br>

            <?= $arResult["FORM_HEADER"] ?>

            <!-- ИМЯ -->
            <div>
                <?= GetMessage('NAME'); ?>
            </div>
            <!-- введите имя -->
            <?= $arResult["QUESTIONS"]["NAME_FIELD"]["HTML_CODE"]; ?><br>

            <!-- НОМЕР -->
            <div><?= GetMessage('NUMBER'); ?></div>
            <!-- введите номер телефона -->
            <?= $arResult["QUESTIONS"]["PHONE_FIELD"]["HTML_CODE"]; ?>

            <div class="checkbox_form">
                <!-- checkbox -->

                <?= $arResult["QUESTIONS"]["SEND_DATA"]["HTML_CODE"]; ?>
                <!--<input type="checkbox" name="chk">-->

                <div class="conf_text">
                    <!--даю согласие на обработку персональных данных -->
                    <?= $arResult["QUESTIONS"]["SEND_DATA"]["CAPTION"]; ?>
                </div>
            </div>
            <br>
            <div>
                <!-- name="submit_btn" в верстке  -->
                <!-- name="web_form_submit" в шаблоне битрикса  -->
                <input class="form_btn" type="submit" name="web_form_submit" value="<?= $arResult["arForm"]["BUTTON"]; ?>" />
            </div>

            <?= $arResult["FORM_FOOTER"] ?>
        </div>
    </div>
    <?
    echo '<pre>';
    var_dump($arResult);
    echo '</pre>';
    ?>
    <div class="container-img">
        <img class="mobile-footer-img" src="<?= SITE_TEMPLATE_PATH; ?>/images/footer-m.png" alt="">
        <!-- нижняя картинка не подключается -->
        <div class="footer-img" alt="" style="background-image:url( <?= SITE_TEMPLATE_PATH ?>/images/footer-form.png );">
        </div>
    </div>

</section>