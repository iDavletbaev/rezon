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
<section class="info" id="info">
    <div class="container info__container">
        <div class="info__content">
            <div class="info__item">
                <h1 class="info__item--title"><?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['VALUE']?></h1>
                <p class="info__item--subtitle"><?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_4']['VALUE']?></p>
                <img class="info__item--image" src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="">
            </div>
            <div class="info__item">
                <img class="info__item--image" src="<?=SITE_TEMPLATE_PATH?>/img/percent.png" alt="">
                <h1 class="info__item--title"><?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE']?></h1>
                <p class="info__item--subtitle">
                    <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['VALUE']?>
                </p>
            </div>
        </div>
    </div>
</section>
