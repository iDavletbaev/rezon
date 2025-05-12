<?php

$arResult['SECTIONS'] = \Bitrix\Iblock\SectionTable::getList(
    array(
        'select' => array('ID', 'NAME', 'IBLOCK_ID'),
        'filter' => array('IBLOCK_ID' => 1),
    )
)->FetchAll();
