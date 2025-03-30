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

// todo: уточнить детали реализации
?>

<section class="map" id="map">
    <div class="container map__container">
        <img class="map__background" src="<?= SITE_TEMPLATE_PATH ?>/img/map.png" alt="">
        <img class="map__logo" src="<?= SITE_TEMPLATE_PATH ?>/img/logo-rezon.png" alt="">
        <img class="map__search" src="<?= SITE_TEMPLATE_PATH ?>/img/search.png" alt="">

        <div class="map__info">
            <h4 class="map__info--title">Глобальный подход в подборе недвижимости</h4>
            <p class="map__info--subtitle">Верим в глобальный подход в подборе недвижимости.
                Работаем в 12 странах по всему миру на постоянной основе
            </p>
        </div>
        <div class="modal-map">
            <div class="modal-map__content">
                <div class="modal-map__content--title">
                    <span class="modal-map__content--title-text">Локации нашего присутствия</span>
                    <span class="modal-map__content--title-close">
        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
          <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
          </svg>
      </span>
                </div>
                <div class="modal-map__search">
                    <div class="modal-map__search--input-box">
                        <label class="modal-map__search--input" for="">
                            <input id="searchInput" type="text" placeholder="Поиск Rezon ">
                            <svg svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5892 20.1785C15.8852 20.1785 20.1785 15.8852 20.1785 10.5892C20.1785 5.29325 15.8852 1 10.5892 1C5.29325 1 1 5.29325 1 10.5892C1 15.8852 5.29325 20.1785 10.5892 20.1785Z" stroke="rgba(0, 30, 95, 1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.0003 24L17.3657 17.3654" stroke="rgba(0, 30, 95, 1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </label>
                    </div>
                    <div class="modal-map__search--content modal-map__search--start">
                        <p>Укажите город или страну, которая вас интересует, и мы проверим, есть ли у нас там представительство</p>
                    </div>
                    <div class="modal-map__search--content modal-map__search--non-result">
                        <span>Rezon International здесь пока нет...</span>
                        <p>Вы можете посмотреть другие варианты в нашем каталоге актуальных предложений.</p>
                        <a class="modal-map__search--content-button" href="#actual">Актуальные предложения</a>
                    </div>
                    <div class="modal-map__search--content modal-map__search--result">
                        <span>Здесь есть Rezon International!</span>
                        <p>Вы можете посмотреть другие варианты в нашем каталоге актуальных предложений.</p>
                        <a class="modal-map__search--content-button" href="#actual">Смотреть предложения</a>
                    </div>
                </div>

                <div class="modal-map__locations">
                    <p class="modal-map__locations--title">Популярные локации:</p>
                    <ul class="modal-map__locations--list" id="locationsList">
                        <li class="modal-map__locations--item">ОАЭ</li>
                        <li class="modal-map__locations--item">Турция</li>
                        <li class="modal-map__locations--item">Испания</li>
                        <li class="modal-map__locations--item">Индонезия</li>
                        <li class="modal-map__locations--item">Великобритания</li>
                        <li class="modal-map__locations--item">Оман</li>
                        <li class="modal-map__locations--item">Саудовская Аравия</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
