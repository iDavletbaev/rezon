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
?>
<section class="services" id="services">
    <div class="container services__container">
        <div class="services__item">
            <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="" class="services__item--background">
            <div class="services__item--content">
                <h5 class="services__item--title"><?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE'] ?></h5>
                <p class="services__item--subtitle">
                    <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['VALUE'] ?>
                </p>
                <a id="company" class="services__item--button"><?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?></a>
            </div>
        </div>
        <div class="services__item">
            <img class="services__item--background" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
            <div class="services__item--content">
                <h5 class="services__item--title"><?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['VALUE'] ?></h5>
                <p class="services__item--subtitle">
                    <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_4']['VALUE'] ?>
                </p>
                <a id="myself" class="services__item--button"><?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?></a>
            </div>
        </div>
    </div>
    <div class="modal-form-services" id="modal-form-services">
        <div class="modal-form-services__content">
            <div class="modal-form-services__content--title">
                <span class="modal-form-services__content--title-text">Оставить заявку</span>

                <span class="modal-form-services__content--title-close">
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                        <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
                    </svg>
                </span>
            </div>
            <form action="" id='fromCompany' class="modal-form-services__form">
                <input type="hidden"
                       name="TYPE"
                       value="fromCompany">
                <label for="" class="modal-form-services__form--label">
                    Имя*
                    <input type="text" name="NAME">
                </label>
                <div class="modal-form-services__form--box">
                    <label for="" class="modal-form-services__form--label">
                        Телефон*
                        <input type="tel" name="PHONE">
                    </label>
                    <label for="" class="modal-form-services__form--label">
                        Почта*
                        <input type="email" name="EMAIL">
                    </label>
                </div>
                <p>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных. <a href="">Подробнее</a>
                </p>
                <button class="modal-form-sale__form--btn js_fromCompany_form"
                        data-form="fromCompany">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</section>
