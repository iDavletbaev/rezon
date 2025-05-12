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
<section class="video">
    <div class="video__container">
        <?php
        if ($arResult['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['SRC']) { ?>
            <video id="bx_videojs_player_d42ddb0083e7526cb64b73CodW2j"
                   class="video-js vjs-default-skin vjs-big-play-centered"
                   width="100%"
                   height="auto"
                   autoplay="true"
                   muted="true">
                <source src="<?=$arResult["DISPLAY_PROPERTIES"]["VIDEO"]["FILE_VALUE"]["SRC"]?>" type="video/mp4">
            </video>
        <?php } else {
            ?>
            <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="">
        <?php } ?>
    </div>
</section>