<?php
use Bitrix\Iblock\ElementTable;

//header('Content-Type: application/json');

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::includeModule('iblock');

$elementId = $_REQUEST['elementId'];

$element = $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "offer_modal",
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
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => $elementId,
        "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "IBLOCK_ID" => 1,
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
            0 => "DISCLAMER_1",
            1 => "DISCLAMER_2",
            2 => "DISCLAMER_3",
            3 => "DISCLAMER_4",
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
);

//$element = \Bitrix\Iblock\ElementTable::getById((int) $_REQUEST['idelement'])->fetch();

if ($element or $elementId) {
    $result['status'] = 'success';
} else {
    $result['status'] = 'error';
}

$result = array(
    'elementId' => $_REQUEST['elementId'],
    'element' => $element,
);

//header("Content-type: application/json; charset=utf-8");
echo json_encode($result);
