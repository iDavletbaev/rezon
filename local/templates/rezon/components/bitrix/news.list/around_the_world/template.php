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
<section class="country" id="country">
    <div class="container country__container">
        <h2 class="country__title"><?= $arResult['NAME'] ?></h2>
        <div class="country__info">
            <div class="country__info--slider">
                <?php foreach ($arResult['ITEMS'] as $item) { ?>
                    <div class="country__info--slide">
                        <div class="country__info--slide-item">
                            <img class="country__info--slide-img" src="<?= $item['SECTION_DATA']['PICTURE']['SRC'] ?>" alt="">
                            <div class="country__info--slide-description">
                                <h3 class="country__info--slide-title"><?=$item['SECTION_DATA']['NAME']?></h3>
                                <div class="country__info--slide-text">
                                    <div class="country__info--slide-text-item">
                                        <img class="country__info--slide-text-img"
                                             src="<?= SITE_TEMPLATE_PATH ?>/img/weather.png" alt="">
                                        климат:
                                    </div>
                                    <div class="country__info--slide-description-item">
                                        <?=$item['PROPERTIES']['CLIMATE']['VALUE']['TEXT']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="country__info--slide-info">
                            <p class="country__info--slide-info-title"><b><?=$item['NAME']?></b></p>
                            <p class="country__info--slide-info-text">
                                <?=$item['PREVIEW_TEXT']?>
                            </p>
                            <ul class="country__info--slide-info-list">
                                <?php foreach ($item['PROPERTIES']['PECULIARITIES']['VALUE'] as $peculiarities) { ?>
                                <li сlass="country__info--slide-info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/rhomb.png" alt="">
                                    <?=$peculiarities?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <button class="country__info--button country__info--button-prev non-active">
                <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 21.6035L11 11.6035L0.999998 1.60352" stroke="#999999" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </button>
            <button class="country__info--button country__info--button-next">
                <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 21.6035L11 11.6035L0.999998 1.60352" stroke="#999999" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </button>
            <div class="country__info--line">
                <div class="country__info--line-item">
                </div>
            </div>
        </div>
    </div>
</section>