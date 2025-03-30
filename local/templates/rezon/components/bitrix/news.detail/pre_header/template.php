<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="header__sale">
    <div class="container">
        <div class="header__special">
            <span><?=$arResult['PREVIEW_TEXT']?></span>
            <span class="header__special--circle"></span>
            <a href="<?=$arResult['DISPLAY_PROPERTIES']['BTN_LINK']['VALUE']?>">
                <?=$arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE']?>
            </a>
        </div>
    </div>
</div>
