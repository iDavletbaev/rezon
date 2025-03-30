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

$title = '';
$subTitle = '';
$countryFull = array();
$countryShort = array();
//d($arResult['ITEMS'][0]);
?>
<section class="main">
    <?php foreach ($arResult['ITEMS'] as $key=>$item) {?>
    <?php //d($item)?>
        <img data-geo="<?=$key?>"
             <?php
             if ($key == 1) {
                 $title = $item['NAME'];
                 $subTitle = $item['PREVIEW_TEXT'];
             }
             $countryFull[] = $item['DISPLAY_PROPERTIES']['COUNTRI_FULL']['VALUE'];
             $countryShort[] = $item['DISPLAY_PROPERTIES']['COUNTRI_SHORT']['VALUE'];
        ?>
             class="main__screen--image <?php if ($key == 0) { ?>main__screen--image-active<?php } ?>"
             src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
             alt="">
    <?php } ?>
    <div class="container main__container">
        <div class="main__screen">
            <div class="main__screen--content">

                <div class="main__info">
                    <h2 class="main__info--title"><?=$title?></h2>
                    <p class="main__info--subtitle"><?=$subTitle?></p>
                    <a class="main__info--button" href="#actual">Актуальные предложения</a>
                </div>

                <?php foreach ($countryFull as $key=>$fullName) { ?>
                    <div data-geo="<?=$key?>" class="main__geo <?php if ($key == 0) { ?>active<?php } ?>">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/geo.png" alt="">
                        <?=$fullName?>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="main__countries">
            <div class="main__countries--slider">
                <button class="main__countries--button main__countries--button-prev no-active">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
                </button>
                <div class="main__countries--item-circle main__countries--item-circle-prev"><span></span><span></span><span></span></div>
                <ul class="main__countries--list">
                    <?php foreach ($countryShort as $key=>$shortName) { ?>
                    <li data-geo="<?=$key?>" class="main__countries--item <?php if ($key == 0) { ?>active<?php } ?>">
                        <?=$shortName?>
                    </li>
                    <?php } ?>

                </ul>
                <div class="main__countries--item-circle main__countries--item-circle-next"><span></span><span></span><span></span></div>
                <button class="main__countries--button main__countries--button-next">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
                </button>
            </div>
            <span class="main__countries--text">*На банере представлены страны в которых, у нас есть агенты </span>
        </div>
    </div>

</section>
