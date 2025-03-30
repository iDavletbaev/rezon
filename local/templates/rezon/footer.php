<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>

</main>
<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "footer",
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
        "ELEMENT_ID" => "21",
        "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "DETAIL_PICTURE",
            2 => "",
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
            0 => "TELEGRAM",
            1 => "WHATSAPP",
            2 => "EMAIL",
            3 => "DISCLAMER_1",
            4 => "DISCLAMER_2",
            5 => "DISCLAMER_3",
            6 => "BROKER",
            7 => "BROKER_NAME",
            8 => "BROKER_DESCRIPTION",
            9 => "BROKER_TELEGRAM",
            10 => "BROKER_WHATSAPP",
            11 => "BROKER_PHONE",
            12 => "CONFIDENCE",
            13 => "TERMS",
            14 => "BANK_DETAILS",
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

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.min.js?ver=1");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/forms.js");
?>
<div class="modal-form">
    <div class="form-container">
        <div class="form-header">
            <div class="form-header__content">
                <img class="form-header__logo" src="<?= SITE_TEMPLATE_PATH ?>/img/logo-rezon.png" alt="">
                <div class="form-header__title">Подбор недвижемости</div>
                <div class="form-header__close">

                    Закрыть
                    <span class="modal-form-sale__content--title-close">
            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454"
                    stroke-linecap="round"/>
              <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454"
                    stroke-linecap="round"/>
            </svg>
          </span>
                </div>
            </div>
        </div>
        <div class="form-content">

            <div class="form">
                <div class="form-data">
                    <h2 class="title">
                        Общие данные
                    </h2>
                    <label class="title-item" for="Name">
                        Имя*
                        <input class="item-input" id="Name" type="text" name="Имя" placeholder="Введите ваше имя"
                               required>
                    </label>
                    <label class="title-item" for="Tel">
                        Телефон*
                        <input class="item-input" id="Tel" type="tel" name="Телефон" placeholder="+79999999999"
                               required>
                    </label>
                    <label class="title-item" for="Mail">
                        Почта*
                        <input class="item-input" id="Mail" type="e-mail" name="Почта" placeholder="Введите вашу почту"
                               required>
                    </label>
                </div>
                <div class="wishes">
                    <h2 class="title">
                        Пожелания
                    </h2>
                    <div class="custom-select">
                        <label class="title-item" for="Type">Тип недвижимости* (выбрать вариант)</label>
                        <div class="select-wrapper">
                            <div class="select-header">
                                <span class="select-current">Выбрать</span>
                                <svg class="select-icon" width="14" height="7" viewBox="0 0 14 7" fill="none">
                                    <path d="M1 1L7 6L13 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="select-dropdown">
                                <label class="select-option">
                                    <span class="checkbox-text">Квартира</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Квартира">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Дом</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Дом">
                                </label>

                                <label class="select-option">
                                    <span class="checkbox-text">Апартаменты</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Апартаменты">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Таунхаус</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Вилла</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]" value="Вилла">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Земельный участок</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Земельный участок">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Коммерческая недвижимость</span>
                                    <input type="checkbox" class="custom-checkbox" name="property"
                                           value="Коммерческая недвижимость">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Другое</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Другое">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="custom-select">

                        <label class="title-item" for="Target"> Цель* (выбрать вариант)</label>
                        <div class="select-wrapper">
                            <div class="select-header">
                                <span class="select-current">Выбрать</span>
                                <svg class="select-icon" width="14" height="7" viewBox="0 0 14 7" fill="none">
                                    <path d="M1 1L7 6L13 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="select-dropdown">
                                <label class="select-option">
                                    <span class="checkbox-text">Аренда</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Квартира">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Покупка</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Дом">
                                </label>

                                <label class="select-option">
                                    <span class="checkbox-text">Продажа</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Апартаменты">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Инвестирование</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Другое</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Другое">
                                </label>
                            </div>
                        </div>

                        <!-- <select id="Target" name="Цель" class="target">
                            <option value="Аренда" class="option-target">Аренда</option>
                            <option value="Покупка" class="option-target">Покупка</option>
                            <option value="Продажа" class="option-target">Продажа</option>
                            <option value="Инвестирование" class="option-target">Инвестирование</option>
                            <option value="Другое" class="option-target">Другое</option>
                        </select> -->
                    </div>
                    <div class="custom-select">

                        <label class="title-item" for="Country">Страна (необязательно)</label>
                        <div class="select-wrapper">
                            <div class="select-header">
                                <span class="select-current">Выбрать</span>
                                <svg class="select-icon" width="14" height="7" viewBox="0 0 14 7" fill="none">
                                    <path d="M1 1L7 6L13 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="select-dropdown">
                                <label class="select-option">
                                    <span class="checkbox-text">Россия</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Квартира">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">ОАЭ</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Дом">
                                </label>

                                <label class="select-option">
                                    <span class="checkbox-text">Испания</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Апартаменты">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Индонезия</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Другое</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Другое">
                                </label>
                            </div>
                        </div>

                        <!-- <label class="title-item" for="Страна">
                          Страна (необязательно)
                          <select name="Страна" class="country" id="Страна">
                              <option value="Россия" class="option-country">Россия</option>
                              <option value="ОАЭ" class="option-country">ОАЭ</option>
                              <option value="Испания" class="option-country">Испания</option>
                              <option value="Индонезия" class="option-country">Индонезия</option>
                              <option value="Другое" class="option-country">Другое</option>
                          </select>
                      </label> -->
                    </div>

                    <label class="title-item" for="Бюджет">
                        Бюджет (необязательно) укажите сумму
                        <input class="title-item-input" id="Бюджет" type="amount" name="Бюджет"
                               placeholder="от 50 до 100 000">
                    </label>
                    <div class="currency">
                        <button class="currency-btn active">RUB</button>
                        <button class="currency-btn">USD</button>
                        <button class="currency-btn">EUR</button>
                        <button class="currency-btn">AED</button>
                        <button class="currency-btn">GBP</button>
                    </div>
                </div>

                <div class="additionally">
                    <h2 class="title">
                        Дополнительно
                    </h2>
                    <div class="custom-select">

                        <label class="title-item" for="peculiarities">Особенности недвижимости (необязательно)</label>
                        <div class="select-wrapper">
                            <div class="select-header">
                                <span class="select-current">Выбрать</span>
                                <svg class="select-icon" width="14" height="7" viewBox="0 0 14 7" fill="none">
                                    <path d="M1 1L7 6L13 1" stroke="#333333" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="select-dropdown">
                                <label class="select-option">
                                    <span class="checkbox-text">Вид на море/озеро/горы</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Квартира">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Бассейн</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Дом">
                                </label>

                                <label class="select-option">
                                    <span class="checkbox-text">Сад</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Апартаменты">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Балкон/терраса</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Парковка</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Детская площадка</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Доступность инфраструктуры</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Тихое место</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Центральное расположение</span>
                                    <input type="checkbox" class="custom-checkbox" name="property_type[]"
                                           value="Таунхаус">
                                </label>
                                <label class="select-option">
                                    <span class="checkbox-text">Другое</span>
                                    <input type="checkbox" class="custom-checkbox" name="property" value="Другое">
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- <label for="peculiarities" class="title-item">
                        Особенности недвижимости (необязательно)
                        <select class="peculiarities-type" name="Особенности" id="peculiarities">
                            <option value="Вид на море/озеро/горы" class="option-peculiarities">Вид на море/озеро/горы</option>
                            <option value="Бассейн" class="option-peculiarities">Бассейн</option>
                            <option value="Сад" class="option-peculiarities">Сад</option>
                            <option value="Балкон/терраса" class="option-peculiarities">Балкон/терраса</option>
                            <option value="Парковка" class="option-peculiarities">Парковка</option>
                            <option value="Детская площадка" class="option-peculiarities">Детская площадка</option>
                            <option value="Доступность инфраструктуры" class="option-peculiarities">Доступность инфраструктуры</option>
                            <option value="Тихое место" class="option-peculiarities">Тихое место</option>
                            <option value="Центральное расположение" class="option-peculiarities">Центральное расположение</option>
                            <option value="Другое" class="option-peculiarities">Другое</option>
                        </select>
                    </label> -->
                    <!-- <div class="additionally-commend"> -->
                    <label for="Commend" class="title-item">
                        Комментарий (необязательно)
                        <textarea class="commend-textarea" name="Commend" id="Commend"
                                  placeholder="Напишите..."></textarea>
                    </label>
                    <p class="text">
                        *Расскажите, пожалуйста, о своих увлечениях, о любимых местах и о распорядке дня, который вы
                        ведёте.
                    </p>
                    <!-- </div> -->
                </div>
            </div>
            <div class="form-bottom">
                <p class="text-bottom">
                    Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных.
                    <a href="#">
                        Подробнее
                    </a>
                </p>
                <button class="send">
                    Отправить
                </button>
            </div>
        </div>
    </div>

    <div class="form-container-mobile">
        <div class="mobile-content">
            <div class="form-header">
                <img class="form-header__logo" src="<?= SITE_TEMPLATE_PATH ?>/img/logo-rezon.png" alt="">
                <span class="modal-form-sale__content--title-close">
          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
            <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
          </svg>
        </span>
            </div>

            <div class="mobile-form">
                <h2 class="title">Общие данные</h2>
                <label class="title-item" for="Name-mobile">
                    Имя*
                    <input class="item-input" id="Name-mobile" type="text" name="Имя" placeholder="Введите ваше имя"
                           required>
                </label>
                <label class="title-item" for="Tel-mobile">
                    Телефон*
                    <input class="item-input" id="Tel-mobile" type="tel" name="Телефон" placeholder="+7 999 999 99 99"
                           required>
                </label>
                <label class="title-item" for="Mail-mobile">
                    Почта*
                    <input class="item-input" id="Mail-mobile" type="email" name="Почта"
                           placeholder="Введите вашу почту" required>
                </label>

                <h2 class="title">Пожелания</h2>
                <div class="title-item">
                    <p>Тип недвижемости* (выбрать вариант)</p>
                    <ul class="property-list">
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Квартира</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Квартира">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Дом</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Дом">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Апартаменты</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Апартаменты">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Таунхаус</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Таунхаус">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Вилла</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Вилла">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Земельный участок</span>
                                <input type="checkbox" class="custom-checkbox" name="property"
                                       value="Земельный участок">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Коммерческая недвижимость</span>
                                <input type="checkbox" class="custom-checkbox" name="property"
                                       value="Коммерческая недвижимость">
                            </label>
                        </li>
                        <li class="option-type">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Другое</span>
                                <input type="checkbox" class="custom-checkbox" name="property" value="Другое">
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="title-item">
                    <p>Цель* (выбрать вариант)</p>
                    <ul class="target-list">
                        <li class="option-target">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Аренда</span>
                                <input type="checkbox" class="custom-checkbox" name="target" value="Аренда">
                            </label>
                        </li>
                        <li class="option-target">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Покупка</span>
                                <input type="checkbox" class="custom-checkbox" name="target" value="Покупка">
                            </label>
                        </li>
                        <li class="option-target">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Продажа</span>
                                <input type="checkbox" class="custom-checkbox" name="target" value="Продажа">
                            </label>
                        </li>
                        <li class="option-target">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Инвестирование</span>
                                <input type="checkbox" class="custom-checkbox" name="target" value="Инвестирование">
                            </label>
                        </li>
                        <li class="option-target">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Другое</span>
                                <input type="checkbox" class="custom-checkbox" name="target" value="Другое">
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="title-item">
                    <p>Страна (необязательно)</p>
                    <ul class="country-list">
                        <li class="option-country">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Россия</span>
                                <input type="checkbox" class="custom-checkbox" name="country" value="Россия">
                            </label>
                        </li>
                        <li class="option-country">
                            <label class="checkbox-label">
                                <span class="checkbox-text">ОАЭ</span>
                                <input type="checkbox" class="custom-checkbox" name="country" value="ОАЭ">
                            </label>
                        </li>
                        <li class="option-country">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Испания</span>
                                <input type="checkbox" class="custom-checkbox" name="country" value="Испания">
                            </label>
                        </li>
                        <li class="option-country">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Индонезия</span>
                                <input type="checkbox" class="custom-checkbox" name="country" value="Индонезия">
                            </label>
                        </li>
                        <li class="option-country">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Другое</span>
                                <input type="checkbox" class="custom-checkbox" name="country" value="Другое">
                            </label>
                        </li>
                    </ul>
                </div>

                <label class="title-item" for="Budget-mobile">
                    Бюджет (необязательно) укажите сумму
                    <input class="item-input" id="Budget-mobile" type="text" name="Бюджет"
                           placeholder="от 50 до 100 000">
                </label>
                <div class="currency">
                    <button class="currency-btn active">RUB</button>
                    <button class="currency-btn">USD</button>
                    <button class="currency-btn">EUR</button>
                    <button class="currency-btn">AED</button>
                    <button class="currency-btn">GBP</button>
                </div>

                <h2 class="title">Дополнительно</h2>
                <div class="title-item">
                    <p>Особенности недвижимости (необязательно)</p>
                    <ul class="peculiarities-list">
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Вид на море/озеро/горы</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities"
                                       value="Вид на море/озеро/горы">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Бассейн</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities" value="Бассейн">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Сад</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities" value="Сад">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Балкон/терраса</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities"
                                       value="Балкон/терраса">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Парковка</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities" value="Парковка">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Детская площадка</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities"
                                       value="Детская площадка">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Доступность инфраструктуры</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities"
                                       value="Доступность инфраструктуры">
                            </label>
                        </li>
                        <li class="option-peculiarities">
                            <label class="checkbox-label">
                                <span class="checkbox-text">Другое</span>
                                <input type="checkbox" class="custom-checkbox" name="peculiarities" value="Другое">
                            </label>
                        </li>
                    </ul>
                </div>

                <label class="title-item" for="Comment-mobile">
                    Комментарий (необязательно)
                    <textarea class="commend-textarea" id="Comment-mobile" name="Комментарий"
                              placeholder="Напишите..."></textarea>
                </label>
                <p class="text">
                    *Расскажите, пожалуйста, о своих увлечениях, о любимых местах и о распорядке дня, который вы ведёте.
                </p>

                <div class="form-bottom">
                    <p class="text-bottom">
                        Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных.
                        <a href="#">Подробнее</a>
                    </p>
                    <button type="submit" class="send">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>