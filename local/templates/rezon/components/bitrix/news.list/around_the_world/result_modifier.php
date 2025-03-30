<?php

// получаем данные о разделе элемента
foreach ($arResult['ITEMS'] as $key=>$item) {
    $sectoinData = \Bitrix\Iblock\SectionTable::getById($item['IBLOCK_SECTION_ID'])->fetch();
    $sectoinData['PICTURE'] = CFile::GetByID($sectoinData['DETAIL_PICTURE'])->fetch();
    $arResult['ITEMS'][$key]['SECTION_DATA'] = $sectoinData;
}
