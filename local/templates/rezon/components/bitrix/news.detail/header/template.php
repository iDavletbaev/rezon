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
$GLOBALS['FIXED_LINKS']['TELEGRAM'] = $arResult['DISPLAY_PROPERTIES']['TELEGRAM']['VALUE'];
$GLOBALS['FIXED_LINKS']['WHATSAPP'] = $arResult['DISPLAY_PROPERTIES']['WHATSAPP']['VALUE'];
?>
<div class="header__body">
    <div class="container">
        <div class="header__container ">
            <a href="tel:<?=str_replace(' ', '', $arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE'])?>" class="header__container--contacts">
                <svg class="header__container--contacts-img" width="30" height="30" viewBox="0 0 30 30" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="15" fill="white"/>
                    <path d="M20.7671 17.2707C20.07 16.7091 19.4305 16.4361 18.8121 16.4361C17.9176 16.4361 17.2735 17.0065 16.6903 17.5909C16.6233 17.6582 16.5421 17.6895 16.4349 17.6895C15.9435 17.6896 15.079 17.0727 13.8655 15.8561C12.4378 14.4249 11.8981 13.5146 12.261 13.1506C13.2449 12.1647 13.5521 11.1763 12.0456 9.2982C11.5063 8.62535 10.9787 8.29834 10.4326 8.29834C9.69606 8.29834 9.13618 8.8885 8.64221 9.40923C8.55681 9.49924 8.47613 9.58427 8.39704 9.66356C7.83873 10.2232 7.83902 11.4438 8.39785 12.9289C9.01099 14.5584 10.2216 16.331 11.8067 17.9202C13.0326 19.1489 14.3664 20.1419 15.664 20.8086C16.7969 21.3907 17.8958 21.7026 18.7583 21.7026C18.7581 21.7026 18.7584 21.7026 18.7583 21.7026C19.298 21.7026 19.7368 21.5846 20.0263 21.3446C20.6145 20.8571 21.7092 19.9542 21.7019 18.8817C21.6979 18.3065 21.3834 17.7674 20.7671 17.2707Z"
                          fill="#001E5F"/>
                </svg>
                <span><?= $arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE'] ?></span>
            </a>
            <div class="header__container--logo">
                <a href="/">
                    <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="">
                </a>
            </div>
            <div class="header__container--buttons">
                <button class="header__container--button-active"><?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?></button>
                <button class="header__container--button-burger">
                    <div class="btn__hamb" id="hamburger">
                        <div></div>
                    </div>
                </button>
            </div>
        </div>

        <div class="menu__box">
            <button class="header__container--button-active mobile"><?= $arResult['DISPLAY_PROPERTIES']['BTN_TEXT']['VALUE'] ?></button>
            <div class="menu__container">
                <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header", Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "36000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                ),
                    false
                );?>
                <div class="menu__image">
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
                </div>
                <div class="menu__contacts">
                    <div class="menu__contacts-social">
                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['TELEGRAM']['VALUE']?>" class="menu__Telegram flex">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.000244141" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                                <path d="M22.0828 11.4213C22.1868 10.7492 21.5478 10.2186 20.9502 10.481L9.0471 15.7072C8.61853 15.8953 8.64988 16.5445 9.09437 16.686L11.5491 17.4677C12.0176 17.6169 12.5249 17.5398 12.934 17.2572L18.4683 13.4336C18.6352 13.3183 18.8171 13.5556 18.6745 13.7026L14.6908 17.8099C14.3043 18.2083 14.3811 18.8834 14.8459 19.1749L19.306 21.9719C19.8063 22.2856 20.4499 21.9704 20.5434 21.3659L22.0828 11.4213Z"
                                      fill="white"/>
                            </svg>
                            <?=$arResult['DISPLAY_PROPERTIES']['TELEGRAM']['NAME']?>
                        </a>
                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['WHATSAPP']['VALUE']?>" class="menu__Whatsapp flex">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15.9719 24.38C20.3055 24.38 23.8186 20.8669 23.8186 16.5333C23.8186 12.1996 20.3055 8.68652 15.9719 8.68652C11.6383 8.68652 8.12524 12.1996 8.12524 16.5333C8.12524 17.9406 8.49572 19.2613 9.14446 20.4034L8.12524 24.38L12.225 23.4293C13.3384 24.0356 14.6149 24.38 15.9719 24.38ZM15.9719 23.1728C19.6388 23.1728 22.6114 20.2002 22.6114 16.5333C22.6114 12.8663 19.6388 9.89372 15.9719 9.89372C12.305 9.89372 9.33242 12.8663 9.33242 16.5333C9.33242 17.9491 9.77557 19.2614 10.5307 20.3391L9.93601 22.5692L12.2055 22.0019C13.2757 22.7404 14.5733 23.1728 15.9719 23.1728Z"
                                      fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15.972 23.8195C20.3056 23.8195 23.8187 20.3064 23.8187 15.9727C23.8187 11.6391 20.3056 8.12598 15.972 8.12598C11.6384 8.12598 8.12537 11.6391 8.12537 15.9727C8.12537 17.38 8.49584 18.7008 9.14458 19.8428L8.12537 23.8195L12.2252 22.8688C13.3386 23.475 14.6151 23.8195 15.972 23.8195ZM15.972 22.6123C19.6389 22.6123 22.6115 19.6396 22.6115 15.9727C22.6115 12.3058 19.6389 9.33317 15.972 9.33317C12.3051 9.33317 9.33254 12.3058 9.33254 15.9727C9.33254 17.3885 9.77569 18.7008 10.5308 19.7785L9.93613 22.0087L12.2056 21.4413C13.2758 22.1798 14.5734 22.6123 15.972 22.6123Z"
                                      fill="white"/>
                                <path d="M14.0103 12.3311C13.8237 11.9563 13.5375 11.9895 13.2484 11.9895C12.7317 11.9895 11.926 12.6084 11.926 13.7603C11.926 14.7044 12.342 15.7378 13.7437 17.2836C15.0965 18.7755 16.874 19.5472 18.3496 19.521C19.8252 19.4947 20.1288 18.2248 20.1288 17.796C20.1288 17.6059 20.0109 17.5111 19.9296 17.4853C19.4268 17.244 18.4993 16.7943 18.2883 16.7098C18.0773 16.6254 17.9671 16.7396 17.8986 16.8018C17.7072 16.9842 17.3279 17.5216 17.198 17.6425C17.0681 17.7634 16.8745 17.7022 16.7939 17.6565C16.4974 17.5375 15.6934 17.1799 15.0525 16.5586C14.2599 15.7903 14.2134 15.526 14.064 15.2907C13.9446 15.1024 14.0322 14.9869 14.076 14.9364C14.2468 14.7394 14.4826 14.4352 14.5883 14.284C14.694 14.1328 14.6101 13.9033 14.5597 13.7603C14.3431 13.1455 14.1596 12.6309 14.0103 12.3311Z"
                                      fill="white"/>
                            </svg>
                            <?=$arResult['DISPLAY_PROPERTIES']['WHATSAPP']['NAME']?>
                        </a>
                    </div>
                    <p class="menu__text">
                        Для оперативной связи с нами, пожалуйста, воспользуйтесь указанными контактами
                    </p>
                    <a href="tel:<?=str_replace(' ', '', $arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE'])?>" class="menu__tel flex">
                        <span class="menu__more"><?=$arResult['DISPLAY_PROPERTIES']['PHONE']['VALUE']?></span>
                        <span class="menu__text-span"><?=$arResult['DISPLAY_PROPERTIES']['PHONE']['NAME']?></span> </a>
                    <a href="email:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>" class="menu__mail flex">
                        <span class="menu__more"><?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?></span>
                        <span class="menu__text-span"><?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['NAME']?></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
