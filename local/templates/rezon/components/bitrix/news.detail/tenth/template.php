<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//d($arResult)
?>
<section class="services-continuation" id="services-continuation">
    <div class="container services-continuation__container">
        <? //Продажа ?>
        <div class="services-continuation__item">
            <img class="services-continuation__item--background"
                 src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>"
                 alt="">
            <div class="services-continuation__item--container">
                <span class="services-continuation__item--text">
                    <?=$arResult['DISPLAY_PROPERTIES']['LIST']['VALUE'][0]?>
                </span>
                <div class="services-continuation__item--first">
                    <div class="services-continuation__item--content">
                        <h5 class="services-continuation__item--title">
                            <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE'] ?>
                        </h5>
                        <p class="services-continuation__item--subtitle">
                            <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['DESCRIPTION'] ?>
                        </p>
                    </div>
                    <button class="services-continuation__item--button" id="open-modal-sale">
                        <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?>
                    </button>
                </div>
            </div>
            <div class="modal-form-sale" id="modal-form-sale">
                <div class="modal-form-sale__content">
                    <div class="modal-form-sale__content--title">
                            <span class="modal-form-sale__content--title-text">
                                 <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?> &bull;
                                <span id="name-modal-sale">
                                    <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE'] ?>
                                </span>
                            </span>
                            <span class="modal-form-sale__content--title-close">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                                  <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                                </svg>
                            </span>
                    </div>
                    <form action="/" id="form-sale" class="modal-form-sale__form">
                        <input type="hidden"
                               name="TYPE"
                               value="sale">
                        <label for="" class="modal-form-sale__form--label">
                            Имя*
                            <input type="text" name="NAME">
                        </label>
                        <div class="modal-form-sale__form--box">
                            <label for="" class="modal-form-sale__form--label">
                                Телефон*
                                <input type="tel" name="PHONE">
                            </label>
                            <label for="" class="modal-form-sale__form--label">
                                Почта*
                                <input type="email" name="EMAIL">
                            </label>
                        </div>
                        <p>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных.
                            <a href="">Подробнее</a>
                        </p>
                        <button class="modal-form-sale__form--btn js_sale_form" data-form="form_sale">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="services-continuation__item">
            <img class="services-continuation__item--background"
                 src=" <?= $arResult['DISPLAY_PROPERTIES']['IMAGE_1']['FILE_VALUE']['SRC'] ?>"
                 alt="">
            <div class="services-continuation__item--container">
                <span class="services-continuation__item--text">
                    <?=$arResult['DISPLAY_PROPERTIES']['LIST']['VALUE'][0]?>
                </span>
                <div class="services-continuation__item--content">
                    <h5 class="services-continuation__item--title">
                        <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['VALUE']?>
                    </h5>
                    <p class="services-continuation__item--subtitle">
                        <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['DESCRIPTION']?>
                    </p>
                </div>
                <button class="services-continuation__item--button" id="open-modal-rent">
                    <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?>
                </button>
            </div>
            <div class="modal-form-sale" id="modal-form-rent">
                <div class="modal-form-sale__content">
                    <div class="modal-form-sale__content--title">
                        <span class="modal-form-sale__content--title-text">
                            <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?> &bull;
                            <span id="name-modal-sale">
                                  <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['VALUE']?>
                            </span>
                        </span>
                        <span class="modal-form-sale__content--title-close">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                            <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </div>
                    <form action="" id="form-rent" class="modal-form-sale__form">
                        <input type="hidden"
                               name="TYPE"
                               value="rent">
                        <label for="" class="modal-form-sale__form--label">
                            Имя*
                            <input type="text" name="NAME">
                        </label>
                        <div class="modal-form-sale__form--box">
                            <label for="" class="modal-form-sale__form--label">
                                Телефон*
                                <input type="tel" name="PHONE">
                            </label>
                            <label for="" class="modal-form-sale__form--label">
                                Почта*
                                <input type="email" name="EMAIL">
                            </label>
                        </div>
                        <p>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных. <a
                                    href="">Подробнее</a></p>
                        <button class="modal-form-sale__form--btn js_rent_form" data-form="form_rent">Отправить</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="services-continuation__item">
            <img class="services-continuation__item--background"
                 src="<?= $arResult['DISPLAY_PROPERTIES']['IMAGE_2']['FILE_VALUE']['SRC'] ?>"
                 alt="">
            <div class="services-continuation__item--container">
                <span class="services-continuation__item--text">
                    <?=$arResult['DISPLAY_PROPERTIES']['LIST']['VALUE'][2]?>
                </span>
                <div class="services-continuation__item--content">
                    <h5 class="services-continuation__item--title">
                        <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['VALUE']?>
                    </h5>
                    <p class="services-continuation__item--subtitle">
                        <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['DESCRIPTION']?>
                    </p>
                </div>
                <button class="services-continuation__item--button" id="open-modal-purchase">
                    <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?>
                </button>
            </div>
            <div class="modal-form-sale" id="modal-form-purchase">
                <div class="modal-form-sale__content">
                    <div class="modal-form-sale__content--title">
                            <span class="modal-form-sale__content--title-text">
                                <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?> &bull;
                                <span id="name-modal-sale">
                                     <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['VALUE']?>
                                </span>
                            </span>
                        <span class="modal-form-sale__content--title-close">
        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
          <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
        </svg>
      </span>
                    </div>
                    <form action="" id="form-purchase" class="modal-form-sale__form">
                        <input type="hidden"
                               name="TYPE"
                               value="purchase">
                        <label for="" class="modal-form-sale__form--label">
                            Имя*
                            <input type="text" name="NAME">
                        </label>
                        <div class="modal-form-sale__form--box">
                            <label for="" class="modal-form-sale__form--label">
                                Телефон*
                                <input type="tel" name="PHONE">
                            </label>
                            <label for="" class="modal-form-sale__form--label">
                                Почта*
                                <input type="email" name="EMAIL">
                            </label>
                        </div>
                        <p>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных. <a
                                    href="">Подробнее</a></p>
                        <button class="modal-form-sale__form--btn js_purchase_form" data-form="form_purchase">Отправить</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>