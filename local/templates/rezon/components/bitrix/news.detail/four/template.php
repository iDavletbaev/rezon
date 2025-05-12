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
<section class="international" id="international">
    <div class="container international__container">
        <img class="international__background" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="">
        <div class="international__info">
            <h4 class="international__info--title">
                <?=$arResult['PREVIEW_TEXT']?>
            </h4>
            <p class="international__info--subtitle">
                <?=$arResult['DETAIL_TEXT']?>
            </p>
        </div>
        <img class="international__logo-text" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
        <img class="international__rezon-white" src="<?= $arResult['DISPLAY_PROPERTIES']['IMAGE_1']['FILE_VALUE']['SRC'] ?>" alt="">
        <img class="international__rezon-color" src="<?= $arResult['DISPLAY_PROPERTIES']['IMAGE_2']['FILE_VALUE']['SRC'] ?>" alt="">
    </div>

    <div class="international__image">
    </div>
</section>
