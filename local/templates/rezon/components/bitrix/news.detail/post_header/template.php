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
<section class="main">
    <img class="main__screen--image" src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="">
    <div class="container main__container">
        <div class="main__screen">
            <div class="main__screen--content">

                <div class="main__info">
                    <h2 class="main__info--title">
                        <?= $arResult['PREVIEW_TEXT'] ?>
                    </h2>
                    <p class="main__info--subtitle">
                        <?= $arResult['DETAIL_TEXT'] ?>
                    </p>
                    <a class="main__info--button" href="<?= $arResult['DISPLAY_PROPERTIES']['BTN_LINK']['VALUE'] ?>">
                        <?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?>
                    </a>
                </div>
                <div class="main__geo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/geo.png" alt="">
                    <?= $arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE'] ?>
                </div>
            </div>
        </div>
        <div class="main__countries">
            <div class="main__countries--slider">
                <button class="main__countries--button main__countries--button-prev no-active">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arrow.png" alt="">
                </button>
                <ul class="main__countries--list">
                    <li class="main__countries--item-circle"><span></span><span></span><span></span></li>
                    <?php foreach ($arResult['SECTIONS'] as $key => $section) { ?>
                        <li class="main__countries--item <?php if ($key == '0') { ?>
                            active
                        <?php } ?>"><?= $section['NAME'] ?></li>
                    <?php } ?>
                    <li class="main__countries--item-circle"><span></span><span></span><span></span></li>
                </ul>
                <button class="main__countries--button main__countries--button-next">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/arrow.png" alt="">

                </button>
            </div>
            <span class="main__countries--text">*На банере представлены страны в которых, у нас есть агенты </span>
        </div>
    </div>
</section>
