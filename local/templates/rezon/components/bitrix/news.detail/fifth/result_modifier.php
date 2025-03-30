<?php

// получаем ссылки на логотиаы и разбиваем на два массива для двух строк
foreach ($arResult['DISPLAY_PROPERTIES']['COMPDNY_LOGO_LIST']['VALUE'] as $image) {
    if ($image % 2) {
        $arResult['LOGO_LIST_1'][] = CFile::GetByID($image)->fetch();
    } else {
        $arResult['LOGO_LIST_2'][] = CFile::GetByID($image)->fetch();
    }
}
