<?php
$allSections = \Bitrix\Iblock\SectionTable::getList(
    array(
        'select' => array('ID', 'NAME', 'IBLOCK_ID'),
        'filter' => array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'),
    )
)->FetchAll();

foreach ($arResutl['ITEMS'] as $key => $item) {
    //
}


