<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Application,
    Bitrix\Main\Context,
    Bitrix\Main\Request,
    Bitrix\Main\Server;

// Получаем данные формы
$data = $_POST;
$iblockId = 0;

header('Content-Type: application/json');

// Выбираем нужный инфоблок под каждую форму
if ($data['TYPE'] == 'sale') {
    $iblockId = 8;
} elseif ($data['TYPE'] == 'rent') {
    $iblockId = 9;
} elseif ($data['TYPE'] == 'purchase') {
    $iblockId = 10;
} elseif ($data['TYPE'] == 'fromCompany') {
    $iblockId = 11;
} elseif ($data['TYPE'] == 'fromAnketa') {
    $iblockId = 13;
}

// Проверка общих форм на заполненность данных
if ($data['TYPE'] == 'sale'
    or $data['TYPE'] == 'rent'
    or $data['TYPE'] == 'purchase'
    or $data['TYPE'] == 'fromCompany'
) {
    if (!$data['NAME']) {
        $error['NAME'] = 'Не заполнено поле "Имя"';
    }
    if (!$data['PHONE']) {
        $error['PHONE'] = 'Не заполнено поле "Телефон"';
    }
    if (!$data['EMAIL']) {
        $error['EMAIL'] = 'Не заполнено поле "Почта"';
    }
}


// Если произошла ошибка, возвращаем сообщение об ошибке
if (isset($error)) {
    //http_response_code(400);
    echo json_encode(['error' => true, 'success' => false, 'message' => $error]);
} else {
    writeToIBlock($data, $iblockId);
    //http_response_code(200);
    echo json_encode(['error' => false, 'success' => true, 'message' => $data]);
}

function writeToIBlock($data, $iblockId)
{
    if (!CModule::IncludeModule("iblock"))
        return;

    $el = new CIBlockElement;
    $PROP = array();
    $PROP['NAME'] = $data['NAME'];
    $PROP['PHONE'] = $data['PHONE'];
    $PROP['EMAIL'] = $data['EMAIL'];
    if (isset($PROP['TYPE'])) {
        $PROP['TYPE'] = $data['property_type'];
    }
    if (isset($PROP['TARGET'])) {
        $PROP['TARGET'] = $data['target'];
    }
    if ($PROP['COUNTRY']) {
        $PROP['COUNTRY'] = $data['country'];
    }
    if ($PROP['BUDGET']) {
        $PROP['BUDGET'] = $data['BUDGET'];
    }
    if (isset($PROP['FEATURE'])) {
        $PROP['FEATURE'] = $data['feature'];
    }
    if (isset($PROP['COMMENT'])){
        $PROP['COMMENT'] = $data['Commend'];
    }

    $arLoadProductArray = array(
        "MODIFIED_BY" => 1,
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => $iblockId,
        "PROPERTY_VALUES" => $PROP,
        "NAME" => "Заявка от " . date('d.m.Y H:i', time()),
        "ACTIVE" => "Y",
    );
    if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
        echo "New ID: ".$PRODUCT_ID;
        echo json_encode(['success' => true, "Element ID: " . $PRODUCT_ID]);
    }
    else {
        echo "Error: ".$el->LAST_ERROR;
        echo json_encode(['error' => true, "Error: " . $el->LAST_ERROR]);
    }
}
