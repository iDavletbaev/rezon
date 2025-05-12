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
<section class="logo" id="logo">
    <div class="container logo__container">
        <p class="logo__text"><?= $arResult['PREVIEW_TEXT'] ?>
            <span class="logo__text-color"><?= $arResult['DETAIL_TEXT'] ?></span>
        </p>
    </div>
</section>
<section class="scrolled">
    <div class="scrolled__block">
        <div class="scrolled__content">
            <div class="scrolled__line">
                <div class="scrolled__line-content scroll-left">
                    <?php foreach ($arResult['LOGO_LIST_1'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-left">
                    <?php foreach ($arResult['LOGO_LIST_1'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-left">
                    <?php foreach ($arResult['LOGO_LIST_1'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-left">
                    <?php foreach ($arResult['LOGO_LIST_1'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-left">
                    <?php foreach ($arResult['LOGO_LIST_1'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="scrolled__block">
        <div class="scrolled__content">
            <div class="scrolled__line">
                <div class="scrolled__line-content scroll-right">
                    <?php foreach ($arResult['LOGO_LIST_2'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-right">
                    <?php foreach ($arResult['LOGO_LIST_2'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-right">
                    <?php foreach ($arResult['LOGO_LIST_2'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-right">
                    <?php foreach ($arResult['LOGO_LIST_2'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
                <div class="scrolled__line-content scroll-right">
                    <?php foreach ($arResult['LOGO_LIST_2'] as $logo) { ?>
                        <div class="scrolled__item">
                            <img src="<?= $logo['SRC'] ?>" alt="partner logo">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
