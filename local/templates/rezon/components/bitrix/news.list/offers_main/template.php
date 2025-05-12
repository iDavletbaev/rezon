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
?>
<section class="offers" id="actual">
    <div class="container offers__container">
        <div class="offers__header">
            <div class="offers__header--left">
                <h3 class="offers__header--left-title"><?=$arResult['NAME']?></h3>
                <p class="offers__header--left-subtitle">
                    <?=$arResult['DESCRIPTION']?>
                </p>
            </div>

            <a href="/offer/" class="offers__header--right">
                <div class="offers__header--right-item">
                    <p class="offers__header--right-item-subtitle">Вилла 300 кв.м</p>
                    <p class="offers__header--right-item-title"><b>Спецпредложение</b></p>
                </div>
                <img class="offers__header--right-img" src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
                <div class="offers__header--right-item">
                    <p class="offers__header--right-item-city">г. Дубаи,&nbsp;Объединённых Арабских Эмиратах</p>
                </div>
            </a>

        </div>
        <div class="offers__filter">
            <button class="offers__filter--button offers__filter--button-prev non-active">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
            </button>
            <ul class="offers__filter--list">
                <li data-filter="all" class="offers__filter--item active">Все предложения</li>
                <li data-filter="oae" class="offers__filter--item">ОАЭ</li>
                <li data-filter="turkiye" class="offers__filter--item">Турция</li>
                <li data-filter="spain" class="offers__filter--item">Испания</li>
                <li data-filter="indonesia" class="offers__filter--item">Индонезия</li>
                <li data-filter="britain" class="offers__filter--item">Великобритания</li>
                <li data-filter="oman" class="offers__filter--item">Оман</li>
                <li data-filter="arabia" class="offers__filter--item">Саудовская Аравия</li>
            </ul>
            <button class="offers__filter--button offers__filter--button-next">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
            </button>
        </div>
    </div>
    <div class="offers__content">
        <div class="offers__content--box">
            <div class="offers__content--slider active" data-filter="0">
                <?php foreach ($arResult['ITEMS'] as $key=>$item) { ?>
                <div class="offers__content--slide"
                     data-id="<?=$item['ID']?>"
                     data-position="<?=$key?>"
                     data-filter="<?=$item['DISPLAY_PROPERTIES']['COUNTRY_CODE']['VALUE']?>"
                >
                    <img class="offers__content--slide-img" src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
                    <span class="offers__content--slide-date">
                        <?=$item['DISPLAY_PROPERTIES']['COMPLETION_DATE']['NAME']?>: <?=$item['DISPLAY_PROPERTIES']['COMPLETION_DATE']['VALUE']?>
                    </span>
                    <a class="offers__content--slide-button">Подробнее</a>
                    <div class="offers__content--slide-info">
                        <h4 class="offers__content--slide-title"><?=$item['NAME']?></h4>
                        <p class="offers__content--slide-subtitle">
                            <?=$item['DISPLAY_PROPERTIES']['LOCALITY']['VALUE']?>
                        </p>
                        <p class="offers__content--slide-text">
                            <?=$item['PREVIEW_TEXT']?>
                        </p>
                        <a class="offers__content--slide-button mobile">Подробнее</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <button class="offers__content--button offers__content--button-prev non-active">
                <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 21.6035L11 11.6035L0.999998 1.60352" stroke="#999999" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </button>
            <button class="offers__content--button offers__content--button-next">
                <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 21.6035L11 11.6035L0.999998 1.60352" stroke="#999999" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="offers__content--line">
            <div class="offers__content--line-item">
            </div>
        </div>
        <a href="/offer/" class="offers__header--right special-offer-mobile">
            <div class="offers__header--right-item">
                <div>
                    <p class="offers__header--right-item-subtitle">Вилла 300 кв.м</p>
                    <p class="offers__header--right-item-title"><b>Спецпредложение</b></p>
                </div>
                <img class="offers__header--right-img" src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png" alt="">
            </div>
            <div class="offers__header--right-item">
                <p class="offers__header--right-item-city">г. Дубаи, Объединённых Арабских Эмиратах</p>
            </div>
        </a>
    </div>
    <div class="modal-offers">
        <div class="modal-offers__container">
            <div class="modal-offers__header">
      <span class="modal-offers__header--title-close">
        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.87207 1.13623L13.8039 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
          <path d="M13.0684 1.13623L1.13654 13.068" stroke="#001E5F" stroke-width="0.795454" stroke-linecap="round"/>
        </svg>
      </span>
                <span class="modal-offers__header--text-color">Апартаменты</span>
                <h3 class="modal-offers__header--title">Samana Barari Twin Towers
                    ALTITUDE de GRISOGONO</h3>
                <p class="modal-offers__header--subtitle">ANAX Development | Dubai</p>
                <span class="modal-offers__header--text-price">Стоимость от <span>23 590 9309 $</span></span>
            </div>
            <div class="modal-offers__content">
                <div class="modal-offers__content--photo">
                    <div class="modal-offers__content--sliders">
                        <div class="modal-offers__content--track">
                            <button class="modal-offers__content--btn-prev">
                                <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0225 17.0449L1.97755 9.00001L10.0225 0.955106" stroke="white"
                                          stroke-width="1.60898" stroke-linecap="round"/>
                                </svg>
                            </button>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal1.png" alt="">1</div>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">2</div>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">3</div>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">4</div>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">5</div>
                            <div class="modal-offers__content--slide"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">6</div>
                            <button class="modal-offers__content--btn-next">
                                <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0225 17.0449L1.97755 9.00001L10.0225 0.955106" stroke="white"
                                          stroke-width="1.60898" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-offers__content--list">
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal1.png" alt="">1</div>
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">2</div>
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">3</div>
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">4</div>
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">5</div>
                            <div class="modal-offers__content--nav"><img src="<?=SITE_TEMPLATE_PATH?>/img/offer-modal2.png" alt="">6</div>
                        </div>
                    </div>
                    <div class="modal-offers__content--footer">
                        <button class="modal-offers__content--footer-btn">
                            Карта
                        </button>
                        <div class="modal-offers__content--address">
                            <p class="modal-offers__content--address-title">Адрес:</p>
                            <p lass="modal-offers__content--address-subtitle">Dubai Healthcare City, Oud Metha Road</p>
                        </div>
                    </div>
                </div>
                <div class="modal-offers__content--info">
                    <h5 class="modal-offers__content--title">Общая информация об объекте</h5>
                    <p class="modal-offers__content--text">O Ten 1 комнатные апартаменты с видом на Burj Khalifa,
                        предлагающие высокий уровень комфорта. O Ten 1 комнатные апартаменты с видом на Burj Khalifa,
                        предлагающие высокий уровень комфорта. </p>
                    <table class="modal-offers__content--table">
                        <tbody>
                        <tr>
                            <td>Срок сдачи:</td>
                            <td>2027 г.</td>
                        </tr>
                        <tr>
                            <td>Назначение:</td>
                            <td>Покупка</td>
                        </tr>
                        <tr>
                            <td>Тип жилья:</td>
                            <td>Апартаменты</td>
                        </tr>
                        <tr>
                            <td>Общая площадь застройки:</td>
                            <td>21402 м2</td>

                        </tr>
                        <tr>
                            <td>Площадь жилья:</td>
                            <td>от 442 м2 и до 21402 м2</td>

                        </tr>
                        <tr>
                            <td>Количество комнат:</td>
                            <td>от 2 и до 20</td>

                        </tr>
                        <tr>
                            <td>Отделка:</td>
                            <td>черновая</td>

                        </tr>
                        <tr>
                            <td>Всего этажей:</td>
                            <td>30</td>

                        </tr>
                        </tbody>
                    </table>
                    <button class="modal-offers__content--btn">
                        <span>Подробнее</span>
                        <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11 11L21 1" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="modal-offers__footer">
                <span class="modal-offers__footer--title">Обсудить со брокером по недвижимости</span>
                <ul class="modal-offers__footer--list">
                    <li class="modal-offers__footer--item"><a href="">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16.5" cy="16.5" r="16" fill="#999999"/>
                                <path d="M22.6514 18.9221C21.9078 18.323 21.2257 18.0318 20.5661 18.0318C19.6119 18.0318 18.9249 18.6403 18.3029 19.2636C18.2313 19.3354 18.1447 19.3688 18.0304 19.3688C17.5062 19.3689 16.5841 18.7109 15.2897 17.4132C13.7669 15.8866 13.1911 14.9156 13.5782 14.5273C14.6278 13.4756 14.9554 12.4213 13.3485 10.4181C12.7733 9.70038 12.2105 9.35156 11.6279 9.35156C10.8423 9.35156 10.2451 9.98106 9.71819 10.5365C9.6271 10.6325 9.54105 10.7232 9.45668 10.8078C8.86115 11.4047 8.86145 12.7067 9.45754 14.2908C10.1116 16.0289 11.4029 17.9197 13.0937 19.6148C14.4013 20.9255 15.824 21.9847 17.2081 22.6958C18.4165 23.3168 19.5887 23.6494 20.5087 23.6494C20.5085 23.6494 20.5088 23.6494 20.5087 23.6494C21.0844 23.6494 21.5524 23.5235 21.8612 23.2675C22.4886 22.7476 23.6563 21.7845 23.6485 20.6405C23.6442 20.0269 23.3088 19.4519 22.6514 18.9221Z"
                                      fill="white"/>
                            </svg>
                            <span>+971 50 393 15 47</span></a></li>
                    <li class="modal-offers__footer--item"><a href="">
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="31.9997" height="32" rx="15.9998" fill="#999999"/>
                                <path d="M22.0828 11.9213C22.1868 11.2492 21.5478 10.7186 20.9502 10.981L9.0471 16.2072C8.61853 16.3953 8.64988 17.0445 9.09437 17.186L11.5491 17.9677C12.0176 18.1169 12.5249 18.0398 12.934 17.7572L18.4683 13.9336C18.6352 13.8183 18.8171 14.0556 18.6745 14.2026L14.6908 18.3099C14.3043 18.7083 14.3811 19.3834 14.8459 19.6749L19.306 22.4719C19.8063 22.7856 20.4499 22.4704 20.5434 21.8659L22.0828 11.9213Z"
                                      fill="white"/>
                            </svg>
                            <span>Telegram</span></a></li>
                    <li class="modal-offers__footer--item"><a href="">
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
                            <span>WhatsApp</span></a></li>
                </ul>
            </div>
        </div>
    </div>

</section>
