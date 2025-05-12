<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>
<section class="main-special">
    <div class="main-special__box">
        <a class="main-special__box--text" href="/">
          <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 15L2 8L9 1" stroke="#333333" stroke-width="2" stroke-linecap="round"/>
          </svg>
          Вернуться назад</a>
        <div class="main-special__header">
            <span class="main-special__header--text-color">
                <?=$arResult['PROPERTIES']['TYPE']['VALUE']?>
            </span>
            <h3 class="main-special__header--title">
                <?= $arResult['NAME'] ?>
            </h3>
            <p class="main-special__header--subtitle">
                <?= $arResult['DISPLAY_PROPERTIES']['LOCALITY']['VALUE'] ?>
            </p>
            <span class="main-special__header--text-price">Стоимость от <span>
                    <?= $arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE'] ?>
                </span>
            </span>
        </div>
    </div>
</section>
<section class="banner">
      <div class="banner__slider">
        <div class="banner__photo">
            <?php foreach ($arResult['DISPLAY_PROPERTIES']['SLIDER_PHOTO']['FILE_VALUE'] as $key => $item) { ?>
                <!-- <div class="banner__photo--slide " data-banner="slide1" data-position="0"> -->
                <img class="banner__photo--slide " data-banner="<?=$key?>" data-position="<?=$key?>"
                     src="<?= $item['SRC'] ?>" alt="">
                <!-- </div>		 -->
            <?php } ?>
        </div>
        <button class="button-arrow banner__btns--left">
          <img class="button-img banner__btns--left-img" src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
        </button>
        <div class="banner__dots">
          <span class="banner__dots--dot active" data-banner="0"></span>        
          <span class="banner__dots--dot " data-banner="1"></span>        
          <span class="banner__dots--dot " data-banner="2"></span>               
       
    </div>
        <button class="button-arrow banner__btns--rigth">
          <img class="button-img banner__btns--rigth-img" src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
        </button>
      </div>
    </section>
<div class="special-offer">
    <div class="special-offer__title">
        special offer
    </div>
</div>
<section class="apartments">
    <div class="apartments__box">
        <!-- <div class="apartments__box--container"> -->
        <div class="apartments__box--content">
            <div class="apartments__box--info">
                <div class="apartments__box--header">
                    <span class="apartments__box--text-color"><?=$arResult['PROPERTIES']['TYPE']['VALUE']?></span>
                    <h3 class="apartments__box--title">
                        <?= $arResult['NAME'] ?>
                    </h3>
                    <p class="apartments__box--subtitle">
                        <?= $arResult['PROPERTIES']['LOCALITY']['VALUE'] ?>
                    </p>
                    <div class="apartments__box--price">
                        <span class="apartments__box--text-price">Актуальная стоимость</span>
                        <span class="apartments__box--sale-price">
                            <?= $arResult['PROPERTIES']['ACTUAL_PRICE']['VALUE'] ?>
                            <span class="apartments__box--old-price">
                                <?= $arResult['PROPERTIES']['OLD_PRICE']['VALUE'] ?>
                            </span>
                        </span>

                    </div>
                </div>
                <p class="apartments__box--text">
                    <?= $arResult['PREVIEW_TEXT'] ?>
                </p>
                <button class="apartments__box--btn">
                    <span>Подробнее</span>
                    <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L11 11L21 1" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="apartments__box--card-name">
                <div class="apartments__box--card-header">
                    <?php
                    $brocker = CFile::GetByID($arResult['PROPERTIES']['BROKER']['VALUE'])->fetch();
                    ?>
                    <img src="<?=$brocker['SRC']?>" alt="card">
                    <div class="apartments__box--card-header-name">
                        <p class="apartments__box--card-header-name-title">
                            <?=$arResult['PROPERTIES']['BROKER_NAME']['VALUE']?>
                        </p>
                        <p class="apartments__box--card-header-name-subtitle">
                            <svg width="23" height="14" viewBox="0 0 23 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.08335 10.0833L4.4831 12.6331C4.91179 12.9547 5.51773 12.8811 5.85706 12.4664L14.625 1.75"
                                      stroke="#3CB531" stroke-width="2" stroke-linecap="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.21574 11.8273L11.1458 13.3714C12.0016 14.056 13.2491 13.9244 13.9431 13.0761L22.6918 2.38327C23.0415 1.95582 22.9785 1.3258 22.551 0.976073C22.1236 0.626345 21.4936 0.689347 21.1438 1.11679L12.3952 11.8096L10.4823 10.2793L9.21574 11.8273Z"
                                      fill="#3CB531"/>
                            </svg>
                            <span>
                      <?=$arResult['PROPERTIES']['BROKER_TEXT']['VALUE']?>
                    </span>
                        </p>

                    </div>
                </div>
                <p class="apartments__box--card-name-text">
                    <?=$arResult['PROPERTIES']['BROKER_DESCRIPTION']['VALUE']['TEXT']?>
                </p>
                <div class="apartments__box--card-name-btn">
                    <button class="apartments__box--card-button">
                        <a href="<?=$arResult['PROPERTIES']['BROKER_TELEGRAM']['VALUE']?>">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                                <path d="M22.0828 11.9213C22.1868 11.2492 21.5478 10.7186 20.9502 10.981L9.0471 16.2072C8.61853 16.3953 8.64988 17.0445 9.09437 17.186L11.5491 17.9677C12.0176 18.1169 12.5249 18.0398 12.934 17.7572L18.4683 13.9336C18.6352 13.8183 18.8171 14.0556 18.6745 14.2026L14.6908 18.3099C14.3043 18.7083 14.3811 19.3834 14.8459 19.6749L19.306 22.4719C19.8063 22.7856 20.4499 22.4704 20.5434 21.8659L22.0828 11.9213Z"
                                      fill="white"/>
                            </svg>
                            <span>Telegram</span></a>
                    </button>
                    <button class="apartments__box--card-button">
                        <a href="<?=$arResult['PROPERTIES']['BROKER_WHATSAPP']['VALUE']?>">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15.9721 24.88C20.3057 24.88 23.8188 21.3669 23.8188 17.0333C23.8188 12.6996 20.3057 9.18652 15.9721 9.18652C11.6386 9.18652 8.12549 12.6996 8.12549 17.0333C8.12549 18.4406 8.49596 19.7613 9.1447 20.9034L8.12549 24.88L12.2253 23.9293C13.3387 24.5356 14.6152 24.88 15.9721 24.88ZM15.9721 23.6728C19.639 23.6728 22.6116 20.7002 22.6116 17.0333C22.6116 13.3663 19.639 10.3937 15.9721 10.3937C12.3053 10.3937 9.33267 13.3663 9.33267 17.0333C9.33267 18.4491 9.77581 19.7614 10.531 20.8391L9.93626 23.0692L12.2057 22.5019C13.2759 23.2404 14.5735 23.6728 15.9721 23.6728Z"
                                      fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15.9721 24.3195C20.3057 24.3195 23.8188 20.8064 23.8188 16.4727C23.8188 12.1391 20.3057 8.62598 15.9721 8.62598C11.6386 8.62598 8.12549 12.1391 8.12549 16.4727C8.12549 17.88 8.49596 19.2008 9.1447 20.3428L8.12549 24.3195L12.2253 23.3688C13.3387 23.975 14.6152 24.3195 15.9721 24.3195ZM15.9721 23.1123C19.639 23.1123 22.6116 20.1396 22.6116 16.4727C22.6116 12.8058 19.639 9.83317 15.9721 9.83317C12.3053 9.83317 9.33267 12.8058 9.33267 16.4727C9.33267 17.8885 9.77581 19.2008 10.531 20.2785L9.93626 22.5087L12.2057 21.9413C13.2759 22.6798 14.5735 23.1123 15.9721 23.1123Z"
                                      fill="white"/>
                                <path d="M14.0106 12.8308C13.824 12.4561 13.5378 12.4893 13.2487 12.4893C12.732 12.4893 11.9263 13.1082 11.9263 14.2601C11.9263 15.2041 12.3423 16.2375 13.744 17.7834C15.0968 19.2752 16.8742 20.047 18.3499 20.0207C19.8255 19.9944 20.1291 18.7246 20.1291 18.2958C20.1291 18.1057 20.0111 18.0109 19.9299 17.9851C19.427 17.7438 18.4996 17.2941 18.2886 17.2096C18.0775 17.1251 17.9673 17.2394 17.8988 17.3016C17.7075 17.4839 17.3281 18.0214 17.1983 18.1423C17.0684 18.2632 16.8747 18.202 16.7941 18.1563C16.4976 18.0373 15.6936 17.6797 15.0527 17.0584C14.2601 16.2901 14.2136 16.0257 14.0643 15.7904C13.9448 15.6022 14.0325 15.4867 14.0762 15.4362C14.247 15.2391 14.4828 14.9349 14.5885 14.7838C14.6943 14.6326 14.6103 14.4031 14.56 14.2601C14.3433 13.6453 14.1598 13.1306 14.0106 12.8308Z"
                                      fill="white"/>
                            </svg>
                            <span>WhatsApp</span></a>
                    </button>
                    <button class="apartments__box--card-button">
                        <a href="tel:<?=str_replace(' ', '', $arResult['PROPERTIES']['BROKER_PHONE']['VALUE'])?>">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16.5" cy="16.5" r="16" fill="#999999"/>
                                <path d="M22.6514 18.9221C21.9078 18.323 21.2257 18.0318 20.5661 18.0318C19.6119 18.0318 18.9249 18.6403 18.3029 19.2636C18.2313 19.3354 18.1447 19.3688 18.0304 19.3688C17.5062 19.3689 16.5841 18.7109 15.2897 17.4132C13.7669 15.8866 13.1911 14.9156 13.5782 14.5273C14.6278 13.4756 14.9554 12.4213 13.3485 10.4181C12.7733 9.70038 12.2105 9.35156 11.6279 9.35156C10.8423 9.35156 10.2451 9.98106 9.71819 10.5365C9.6271 10.6325 9.54105 10.7232 9.45668 10.8078C8.86115 11.4047 8.86145 12.7067 9.45754 14.2908C10.1116 16.0289 11.4029 17.9197 13.0937 19.6148C14.4013 20.9255 15.824 21.9847 17.2081 22.6958C18.4165 23.3168 19.5887 23.6494 20.5087 23.6494C20.5085 23.6494 20.5088 23.6494 20.5087 23.6494C21.0844 23.6494 21.5524 23.5235 21.8612 23.2675C22.4886 22.7476 23.6563 21.7845 23.6485 20.6405C23.6442 20.0269 23.3088 19.4519 22.6514 18.9221Z"
                                      fill="white"/>
                            </svg>
                            <span><?=$arResult['PROPERTIES']['BROKER_PHONE']['VALUE']?></span></a>
                    </button>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="apartments__content">
            <div class="apartments__content--info">
                <h5 class="apartments__content--title">Общая информация об объекте</h5>
                <!-- <p class="apartments__content--text">O Ten 1 комнатные апартаменты с видом на Burj Khalifa, предлагающие высокий уровень комфорта. O Ten 1 комнатные апартаменты с видом на Burj Khalifa,  предлагающие высокий уровень комфорта. </p> -->
                <table class="apartments__content--table">
                    <tbody>
                    <?php
                    $obiInfo = array();
                    foreach ($arResult['PROPERTIES']['OBJECT_INFO']['VALUE'] as $key => $info) {
                        $obiInfo[$key]['NAME'] = $info;
                    }
                    foreach ($arResult['PROPERTIES']['OBJECT_INFO']['DESCRIPTION'] as $key => $desc) {
                        $obiInfo[$key]['VALUE'] = $desc;
                    }
                    foreach ($obiInfo as $info) {
                        ?>
                        <tr>
                            <td><?= $info['NAME'] ?>:</td>
                            <td><?= $info['VALUE'] ?></td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
                <button class="apartments__content--btn">
                    <span>Подробнее</span>
                    <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L11 11L21 1" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="apartments__content--info">
                <h5 class="apartments__content--title">Информация об объекте</h5>
                <table class="apartments__content--table">
                <tbody>
                    <tr>
                    <td>Площадь жилья:</td>
                    <td>24253 м2.</td>
                    </tr>
                    <tr>
                    <td>Количество комнат:</td>
                    <td>от 2 до 3х от 2 до 3хот 2 до 3хот 2 до </td>
                    </tr>
                    <tr>
                    <td>Высота потолков:</td>
                    <td>2,5 м.</td>
                    </tr>
                    <tr>
                    <td>Всего этажей:</td>
                    <td>30 </td>
        
                    </tr>
                    <tr>
                    <td>Этаж:</td>
                    <td>5 </td>
        
                    </tr>
                    <tr>
                    <td>Балкон/лоджия/терасса:</td>
                    <td>балкон</td>
        
                    </tr>
                    <tr>
                    <td>Кухня:</td>
                    <td>балкон</td>
        
                    </tr>
                    <tr>
                    <td>Санузел:</td>
                    <td>балкон </td>
        
                    </tr>
                    <tr>
                    <td>Количество санузлов:</td>
                    <td>балкон </td>
        
                    </tr>
                    <tr>
                    <td>Отделка:</td>
                    <td>черновая </td>
        
                    </tr>
                    <tr>
                    <td>Материал:</td>
                    <td>балкон </td>
        
                    </tr>
                </tbody>
                </table>
                <button class="apartments__content--btn">
                <span>Подробнее</span> 
                <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L11 11L21 1" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                    </svg> 
                </button>
            </div>
            <div class="apartments__content--info apartments__content--box-address">
                <h5 class="apartments__content--title">Адрес на карте</h5>
                <div class="apartments__content--address">
                    <p class="apartments__content--address-title">Адрес:</p>
                    <p lass="apartments__content--address-subtitle">
                        <?= $arResult['PROPERTIES']['ADDRESS']['VALUE'] ?>
                    </p>
                </div>
                <button class="apartments__content--footer-btn">
                    Карта
                </button>
            </div>
        </div>


    </div>

</section>


<div class="special-offer">
    <div class="special-offer__title">
        special offer
    </div>
</div>
<section class="layout">
    <div class="layout__box">
        <div class="layout__box--header">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/blue-home.png" alt="">
            <div class="layout__box--content">
                <span class="layout__box--text-color">Blue Bay Walk</span>
                <p class="layout__box--text">Планировка по этажам</p>
            </div>
        </div>
        <div class="layout__body">
            
            <div class="layout__body--track">
                <div class="layout__body--slider">
                    <button class="layout__body--button layout__body--button-prev">
                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0225 17.0449L1.97755 9.00001L10.0225 0.955106" stroke="white"
                                  stroke-width="1.60898" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <div class="layout__body--track-slider">
                        <?php foreach ($arResult['PROPERTIES']['FLOOR_PLAN']['VALUE'] as $plan) {
                            $img = CFile::GetByID($plan)->fetch();
                            ?>

                        <div class="layout__body--slide">
                            <div class="layout__body--item"><img src="<?=$img['SRC']?>" alt=""></div>
                            <p class="layout__body--floor">1 этаж</p>
                        </div>
                        <?php } ?>
                    </div>
                    <button class="layout__body--button layout__body--button-next">
                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0225 17.0449L1.97755 9.00001L10.0225 0.955106" stroke="white"
                                  stroke-width="1.60898" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

            </div>
            <div class="layout__body--info">
                <h5 class="layout__body--title">Дополнительно</h5>
                <p class="layout__body--text">
                    <?=$arResult['PROPERTIES']['PLAN_DESCRIPTION']['VALUE']['TEXT']?>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="special-offer">
    <div class="special-offer__title">
        special offer
    </div>
</div>
<section class="place">
    <div class="place__box">
        <div class="place__box--info">
            <div class="place__box--header">
                <div class="place__box--location">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/place.png" alt="">
                    <span>Местоположение</span>
                </div>
            </div>
            <div class="place__box--buttons">
                <button class="place__box--button">
                    <a href="<?=$GLOBALS['FIXED_LINKS']['TELEGRAM']?>">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                            <path d="M22.0828 11.9213C22.1868 11.2492 21.5478 10.7186 20.9502 10.981L9.0471 16.2072C8.61853 16.3953 8.64988 17.0445 9.09437 17.186L11.5491 17.9677C12.0176 18.1169 12.5249 18.0398 12.934 17.7572L18.4683 13.9336C18.6352 13.8183 18.8171 14.0556 18.6745 14.2026L14.6908 18.3099C14.3043 18.7083 14.3811 19.3834 14.8459 19.6749L19.306 22.4719C19.8063 22.7856 20.4499 22.4704 20.5434 21.8659L22.0828 11.9213Z"
                                  fill="white"/>
                        </svg>
                        <span>Telegram</span></a>
                </button>
                <button class="place__box--button">
                    <a href="<?=$GLOBALS['FIXED_LINKS']['WHATSAPP']?>">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M15.9721 24.88C20.3057 24.88 23.8188 21.3669 23.8188 17.0333C23.8188 12.6996 20.3057 9.18652 15.9721 9.18652C11.6386 9.18652 8.12549 12.6996 8.12549 17.0333C8.12549 18.4406 8.49596 19.7613 9.1447 20.9034L8.12549 24.88L12.2253 23.9293C13.3387 24.5356 14.6152 24.88 15.9721 24.88ZM15.9721 23.6728C19.639 23.6728 22.6116 20.7002 22.6116 17.0333C22.6116 13.3663 19.639 10.3937 15.9721 10.3937C12.3053 10.3937 9.33267 13.3663 9.33267 17.0333C9.33267 18.4491 9.77581 19.7614 10.531 20.8391L9.93626 23.0692L12.2057 22.5019C13.2759 23.2404 14.5735 23.6728 15.9721 23.6728Z"
                                  fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M15.9721 24.3195C20.3057 24.3195 23.8188 20.8064 23.8188 16.4727C23.8188 12.1391 20.3057 8.62598 15.9721 8.62598C11.6386 8.62598 8.12549 12.1391 8.12549 16.4727C8.12549 17.88 8.49596 19.2008 9.1447 20.3428L8.12549 24.3195L12.2253 23.3688C13.3387 23.975 14.6152 24.3195 15.9721 24.3195ZM15.9721 23.1123C19.639 23.1123 22.6116 20.1396 22.6116 16.4727C22.6116 12.8058 19.639 9.83317 15.9721 9.83317C12.3053 9.83317 9.33267 12.8058 9.33267 16.4727C9.33267 17.8885 9.77581 19.2008 10.531 20.2785L9.93626 22.5087L12.2057 21.9413C13.2759 22.6798 14.5735 23.1123 15.9721 23.1123Z"
                                  fill="white"/>
                            <path d="M14.0106 12.8308C13.824 12.4561 13.5378 12.4893 13.2487 12.4893C12.732 12.4893 11.9263 13.1082 11.9263 14.2601C11.9263 15.2041 12.3423 16.2375 13.744 17.7834C15.0968 19.2752 16.8742 20.047 18.3499 20.0207C19.8255 19.9944 20.1291 18.7246 20.1291 18.2958C20.1291 18.1057 20.0111 18.0109 19.9299 17.9851C19.427 17.7438 18.4996 17.2941 18.2886 17.2096C18.0775 17.1251 17.9673 17.2394 17.8988 17.3016C17.7075 17.4839 17.3281 18.0214 17.1983 18.1423C17.0684 18.2632 16.8747 18.202 16.7941 18.1563C16.4976 18.0373 15.6936 17.6797 15.0527 17.0584C14.2601 16.2901 14.2136 16.0257 14.0643 15.7904C13.9448 15.6022 14.0325 15.4867 14.0762 15.4362C14.247 15.2391 14.4828 14.9349 14.5885 14.7838C14.6943 14.6326 14.6103 14.4031 14.56 14.2601C14.3433 13.6453 14.1598 13.1306 14.0106 12.8308Z"
                                  fill="white"/>
                        </svg>
                        <span>WhatsApp</span></a>
                </button>

            </div>
            <div class="place__box--address"><span class="place__box--address-title">Адрес:</span>
                <span><?= $arResult['PROPERTIES']['LOCALITY']['VALUE'] ?></span>
            </div>
        </div>
        <?php
        $location = explode(',', $arResult['PROPERTIES']['LOCATION']['VALUE']);
        ?>
        <div class="place__box--map">
        <div style="position:relative;overflow:hidden;">
            <a href="https://yandex.ru/maps/11499/dubai/?utm_medium=mapframe&utm_source=maps"
               style="color:#eee;font-size:12px;position:absolute;top:0px;">Дубай</a>
            <a href="https://yandex.ru/maps/11499/dubai/?ll=<?=$location[1]?>%2C<?=$location[0]?>8&utm_medium=mapframe&utm_source=maps&z=15.66"
               style="color:#eee;font-size:12px;position:absolute;top:14px;">
                Яндекс Карты
            </a>
            <iframe src="https://yandex.ru/map-widget/v1/?ll=<?=$location[1]?>%2C<?=$location[0]?>&z=15.66"
                    width="100%"
                    height="400"
                    frameborder="1"
                    allowfullscreen="true"
                    style="position:relative;">
            </iframe>
        </div>
<!-- <script src="https://static-maps.yandex.ru/v1?ll=28.978178,41.011218&size=200,200&spn=0.016457,0.00619&apikey=0234801c-8a6a-48c3-8c48-6c9a58eed00e"></script>
            <img src="img/map-special.png" alt="карта"> -->
        </div>
    </div>
</section>
