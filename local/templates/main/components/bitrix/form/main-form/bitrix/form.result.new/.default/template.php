<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* вывод ошибок */
//if ($arResult["isFormErrors"] == "Y") : 
?>
<? //echo $arResult["FORM_ERRORS_TEXT"]; 
?>
<? //endif; 
?>

<section class="footer-form" id="feedback">
    <div class="container__form">
        <div data-aos="zoom-in-left" class="form">
            <?= $arResult["arForm"]["DESCRIPTION"] ?>
            <br><br>

            <?= $arResult["FORM_HEADER"] ?>
            <input type="hidden" name="web_form_submit" value="Y">

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
    //var_dump($_POST);
    var_dump($arResult);
    echo '</pre>';
    ?>

    <?php
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['chk'])) {


        //проверяем на наличие значений в массиве $_POST
        if (isset($_POST['name']))   $name = $_POST['name'];
        if (isset($_POST['chk']))     $chk = $_POST['chk'];
        if (isset($_POST['phone'])) $phone = $_POST['phone'];

        //формируем массив с параметрами ID полей
        $arValues = array(
            /* "NAME_FIELD_32" => $name,
            "SEND_DATA_33" => $chk,
            "PHONE_FIELD_34" => $phone, */
            "form_text_32" => $name,
            "form_checkbox_33" => $chk,
            "form_text_34" => $phone,
        );

        //задаем ID нашей формы, можно глянуть в админке
        $FORM_ID = 9;
        //подключаем модуль форм, т.к. без него скорей всего будет ошибка
        CModule::IncludeModule("form");

        //если результат добавился в веб форму, передаем ID и поля
        if ($RESULT_ID = CFormResult::Add($FORM_ID, $arValues)) {

            //пишем примитивный текст письма

            echo 'Результат №' . $RESULT_ID . ' отправлен' . '<br>';
            echo '<b>С вами свяжутся в близжайшее время! </b> ';
            /* echo '<pre>';
            var_dump($_POST);
            var_dump($arValues);
            echo '</pre>'; */
        } else {
            global $strError;
            echo $strError;
        }
    }   ?>


    <div class="container-img">
        <img class="mobile-footer-img" src="<?= SITE_TEMPLATE_PATH; ?>/images/footer-m.png" alt="">
        <div class="footer-img" alt="" style="background-image:url( <?= SITE_TEMPLATE_PATH ?>/images/footer-form.png );">
        </div>
    </div>

</section>