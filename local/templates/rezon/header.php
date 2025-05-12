<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico" type="image/x-icon">
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");

    $APPLICATION->ShowHead(); ?>
</head>

<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<header class="header">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "pre_header",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => "7",
            "FIELD_CODE" => array(
                0 => "",
            ),
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array(
                0 => "BTN_LINK",
                1 => "BTN_TEXT",
                2 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "pre_header"
        ),
        false
    ); ?>
    <?php $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "header",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => "8",
            "FIELD_CODE" => array(
                0 => "PREVIEW_TEXT",
                1 => "PREVIEW_PICTURE",
                2 => "DETAIL_TEXT",
                3 => "DETAIL_PICTURE",
            ),
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array(
                0 => "BTN_LINK",
                1 => "BTN_TEXT",
                2 => "PHONE",
                3 => "EMAIL",
                4 => "TELEGRAM",
                5 => "WHATSAPP",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "header"
        ),
        false
    ); ?>
</header>

<main>
    <div id="block-to-hide" class="fixed-link">
        <a href="/">
            <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.216585 0.0406284C0.223631 0.0758591 3.80297 6.83292 8.16441 15.0485L16.0911 30H24.0037C30.3169 30 31.9093 29.9789 31.867 29.9084C31.8318 29.8661 30.3098 27.4635 28.4779 24.5817C26.6459 21.6999 25.1451 19.3254 25.1451 19.2972C25.1451 19.269 25.4411 19.0576 25.7934 18.8322C26.5755 18.3249 27.7381 17.2327 28.3581 16.4013C28.9218 15.6615 29.7321 14.048 29.9716 13.1954C30.5917 11.0182 30.4789 8.49577 29.6827 6.52995C29.0838 5.05734 28.2876 3.89476 27.1321 2.78855C25.7581 1.48505 24.1446 0.646578 22.1013 0.1745C21.446 0.026535 21.3897 0.026535 10.8207 0.00539589C4.76122 -0.0086956 0.202493 0.0053997 0.216585 0.0406284Z"
                      fill="#DC0024"/>
                <path d="M0.132324 17.1905V30H6.93166H13.7381L13.4562 29.4927C13.3012 29.2109 10.2714 23.4966 6.72029 16.7888C3.16208 10.0811 0.230967 4.55003 0.195738 4.49366C0.160508 4.43729 0.132324 10.06 0.132324 17.1905Z"
                      fill="#08338F"/>
            </svg>
        </a>
        <?php // TELEGRAM ?>
        <a class="fixed-link__social" href="<?= $GLOBALS['FIXED_LINKS']['TELEGRAM'] ?>">
            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.000244141" y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                <path d="M22.0828 11.9213C22.1868 11.2492 21.5478 10.7186 20.9502 10.981L9.0471 16.2072C8.61853 16.3953 8.64988 17.0445 9.09437 17.186L11.5491 17.9677C12.0176 18.1169 12.5249 18.0398 12.934 17.7572L18.4683 13.9336C18.6352 13.8183 18.8171 14.0556 18.6745 14.2026L14.6908 18.3099C14.3043 18.7083 14.3811 19.3834 14.8459 19.6749L19.306 22.4719C19.8063 22.7856 20.4499 22.4704 20.5434 21.8659L22.0828 11.9213Z"
                      fill="white"/>
            </svg>
        </a>
        <?php // WHATSAPP ?>
        <a class="fixed-link__social" href="<?= $GLOBALS['FIXED_LINKS']['WHATSAPP'] ?>">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.000244141" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M15.9721 24.38C20.3057 24.38 23.8188 20.8669 23.8188 16.5333C23.8188 12.1996 20.3057 8.68652 15.9721 8.68652C11.6386 8.68652 8.12549 12.1996 8.12549 16.5333C8.12549 17.9406 8.49596 19.2613 9.1447 20.4034L8.12549 24.38L12.2253 23.4293C13.3387 24.0356 14.6152 24.38 15.9721 24.38ZM15.9721 23.1728C19.639 23.1728 22.6116 20.2002 22.6116 16.5333C22.6116 12.8663 19.639 9.89372 15.9721 9.89372C12.3053 9.89372 9.33267 12.8663 9.33267 16.5333C9.33267 17.9491 9.77581 19.2614 10.531 20.3391L9.93626 22.5692L12.2057 22.0019C13.2759 22.7404 14.5735 23.1728 15.9721 23.1728Z"
                      fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M15.9721 23.8195C20.3057 23.8195 23.8188 20.3064 23.8188 15.9727C23.8188 11.6391 20.3057 8.12598 15.9721 8.12598C11.6386 8.12598 8.12549 11.6391 8.12549 15.9727C8.12549 17.38 8.49596 18.7008 9.1447 19.8428L8.12549 23.8195L12.2253 22.8688C13.3387 23.475 14.6152 23.8195 15.9721 23.8195ZM15.9721 22.6123C19.639 22.6123 22.6116 19.6396 22.6116 15.9727C22.6116 12.3058 19.639 9.33317 15.9721 9.33317C12.3053 9.33317 9.33267 12.3058 9.33267 15.9727C9.33267 17.3885 9.77581 18.7008 10.531 19.7785L9.93626 22.0087L12.2057 21.4413C13.2759 22.1798 14.5735 22.6123 15.9721 22.6123Z"
                      fill="white"/>
                <path d="M14.0106 12.3311C13.824 11.9563 13.5378 11.9895 13.2487 11.9895C12.732 11.9895 11.9263 12.6084 11.9263 13.7603C11.9263 14.7044 12.3423 15.7378 13.744 17.2836C15.0968 18.7755 16.8742 19.5472 18.3499 19.521C19.8255 19.4947 20.1291 18.2248 20.1291 17.796C20.1291 17.6059 20.0111 17.5111 19.9299 17.4853C19.427 17.244 18.4996 16.7943 18.2886 16.7098C18.0775 16.6254 17.9673 16.7396 17.8988 16.8018C17.7075 16.9842 17.3281 17.5216 17.1983 17.6425C17.0684 17.7634 16.8747 17.7022 16.7941 17.6565C16.4976 17.5375 15.6936 17.1799 15.0527 16.5586C14.2601 15.7903 14.2136 15.526 14.0643 15.2907C13.9448 15.1024 14.0325 14.9869 14.0762 14.9364C14.247 14.7394 14.4828 14.4352 14.5885 14.284C14.6943 14.1328 14.6103 13.9033 14.56 13.7603C14.3433 13.1455 14.1598 12.6309 14.0106 12.3311Z"
                      fill="white"/>
            </svg>
        </a>
    </div>
    

