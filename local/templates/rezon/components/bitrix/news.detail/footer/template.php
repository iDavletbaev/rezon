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
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__contacts">
            <div class="footer__contacts--menu">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "36000",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                    ),
                    false
                );
                ?>
            </div>
            <div class="footer__contacts--info">
                <div class="footer__contacts--info-logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-rezon.png" alt="">
                    <div class="footer__contacts--info-logo-social">
                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['TELEGRAM']['VALUE']?>">
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18.6251" cy="18.254" r="18.254" fill="#005DC9"/>
                                <path d="M27.7338 10.703C27.8964 9.65282 26.8978 8.82388 25.964 9.23386L7.36532 17.3997C6.69567 17.6937 6.74465 18.708 7.43918 18.9292L11.2747 20.1506C12.0067 20.3837 12.7994 20.2632 13.4386 19.8216L22.086 13.8473C22.3468 13.6671 22.631 14.0379 22.4082 14.2676L16.1837 20.6852C15.5799 21.3077 15.6997 22.3626 16.426 22.818L23.3951 27.1883C24.1767 27.6785 25.1823 27.1861 25.3285 26.2415L27.7338 10.703Z"
                                      fill="white"/>
                            </svg>
                            <span>
                                <?=$arResult['DISPLAY_PROPERTIES']['TELEGRAM']['NAME']?>
                            </span>
                        </a>
                        <a href="<?=$arResult['DISPLAY_PROPERTIES']['WHATSAPP']['VALUE']?>">
                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.878906" width="39.9996" height="40" rx="19.9998" fill="#005DC9"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M20.844 30.4748C26.261 30.4748 30.6523 26.0834 30.6523 20.6663C30.6523 15.2493 26.261 10.8579 20.844 10.8579C15.427 10.8579 11.0356 15.2493 11.0356 20.6663C11.0356 22.4255 11.4987 24.0764 12.3097 25.504L11.0356 30.4748L16.1604 29.2864C17.5521 30.0442 19.1478 30.4748 20.844 30.4748ZM20.844 28.9658C25.4276 28.9658 29.1433 25.25 29.1433 20.6663C29.1433 16.0827 25.4276 12.3669 20.844 12.3669C16.2604 12.3669 12.5446 16.0827 12.5446 20.6663C12.5446 22.4361 13.0985 24.0765 14.0425 25.4236L13.2991 28.2113L16.1359 27.5021C17.4737 28.4252 19.0957 28.9658 20.844 28.9658Z"
                                      fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M20.844 29.7741C26.261 29.7741 30.6523 25.3827 30.6523 19.9657C30.6523 14.5486 26.261 10.1572 20.844 10.1572C15.427 10.1572 11.0356 14.5486 11.0356 19.9657C11.0356 21.7248 11.4987 23.3758 12.3097 24.8033L11.0356 29.7741L16.1604 28.5857C17.5521 29.3435 19.1478 29.7741 20.844 29.7741ZM20.844 28.2651C25.4276 28.2651 29.1433 24.5493 29.1433 19.9657C29.1433 15.382 25.4276 11.6662 20.844 11.6662C16.2604 11.6662 12.5446 15.382 12.5446 19.9657C12.5446 21.7354 13.0985 23.3758 14.0425 24.7229L13.2991 27.5106L16.1359 26.8014C17.4737 27.7245 19.0957 28.2651 20.844 28.2651Z"
                                      fill="white"/>
                                <path d="M18.392 15.4132C18.1588 14.9448 17.801 14.9863 17.4396 14.9863C16.7937 14.9863 15.7866 15.76 15.7866 17.1998C15.7866 18.3799 16.3066 19.6716 18.0588 21.6039C19.7497 23.4687 21.9716 24.4334 23.8161 24.4006C25.6606 24.3678 26.0401 22.7804 26.0401 22.2444C26.0401 22.0068 25.8927 21.8883 25.7911 21.8561C25.1626 21.5544 24.0033 20.9923 23.7395 20.8867C23.4757 20.7811 23.338 20.9239 23.2523 21.0016C23.0131 21.2296 22.539 21.9014 22.3766 22.0525C22.2142 22.2037 21.9722 22.1272 21.8715 22.07C21.5008 21.9213 20.4958 21.4743 19.6947 20.6977C18.7039 19.7373 18.6458 19.4068 18.4591 19.1127C18.3098 18.8774 18.4194 18.733 18.4741 18.6699C18.6875 18.4236 18.9823 18.0434 19.1145 17.8544C19.2466 17.6654 19.1417 17.3785 19.0787 17.1998C18.808 16.4313 18.5785 15.788 18.392 15.4132Z"
                                      fill="white"/>
                            </svg>
                            <span>
                                <?=$arResult['DISPLAY_PROPERTIES']['WHATSAPP']['NAME']?>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="footer__contacts--info-mail">
                    <a class="footer__contacts--info-mail-link"
                       href="email:<?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>">
                        <?=$arResult['DISPLAY_PROPERTIES']['EMAIL']['VALUE']?>
                    </a>
                    <span class="footer__contacts--info-mail-text">Наша почта</span>
                </div>
            </div>
            <div class="footer__contacts--info-card">
                <div class="footer__contacts--card-name">
                    <div class="footer__contacts--card-header">
                        <img src="<?=$arResult['DISPLAY_PROPERTIES']['BROKER']['FILE_VALUE']['SRC']?>"
                             alt="<?=$arResult['DISPLAY_PROPERTIES']['BROKER_NAME']['VALUE']?>">
                        <div class="footer__contacts--card-header-name">
                            <p class="footer__contacts--card-header-name-title">
                                <?=$arResult['DISPLAY_PROPERTIES']['BROKER_NAME']['VALUE']?>
                            </p>
                            <p class="footer__contacts--card-header-name-subtitle">
                                <svg width="23" height="14" viewBox="0 0 23 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.08335 10.0833L4.4831 12.6331C4.91179 12.9547 5.51773 12.8811 5.85706 12.4664L14.625 1.75"
                                          stroke="#3CB531" stroke-width="2" stroke-linecap="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.21574 11.8273L11.1458 13.3714C12.0016 14.056 13.2491 13.9244 13.9431 13.0761L22.6918 2.38327C23.0415 1.95582 22.9785 1.3258 22.551 0.976073C22.1236 0.626345 21.4936 0.689347 21.1438 1.11679L12.3952 11.8096L10.4823 10.2793L9.21574 11.8273Z"
                                          fill="#3CB531"/>
                                </svg>
                                <span>
                    Надежный брокер
                  </span>
                            </p>
                        </div>
                    </div>
                    <p class="footer__contacts--card-name-text">
                        <?=$arResult['DISPLAY_PROPERTIES']['BROKER_DESCRIPTION']['DISPLAY_VALUE']?>
                    </p>
                    <div class="footer__contacts--card-name-btn">
                        <button class="apartments__box--card-button">
                            <a href="tel:<?=str_replace(' ', '', $arResult['DISPLAY_PROPERTIES']['BROKER_PHONE']['VALUE'])?>">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16.5" cy="16.5" r="16" fill="#999999"/>
                                    <path d="M22.6514 18.9221C21.9078 18.323 21.2257 18.0318 20.5661 18.0318C19.6119 18.0318 18.9249 18.6403 18.3029 19.2636C18.2313 19.3354 18.1447 19.3688 18.0304 19.3688C17.5062 19.3689 16.5841 18.7109 15.2897 17.4132C13.7669 15.8866 13.1911 14.9156 13.5782 14.5273C14.6278 13.4756 14.9554 12.4213 13.3485 10.4181C12.7733 9.70038 12.2105 9.35156 11.6279 9.35156C10.8423 9.35156 10.2451 9.98106 9.71819 10.5365C9.6271 10.6325 9.54105 10.7232 9.45668 10.8078C8.86115 11.4047 8.86145 12.7067 9.45754 14.2908C10.1116 16.0289 11.4029 17.9197 13.0937 19.6148C14.4013 20.9255 15.824 21.9847 17.2081 22.6958C18.4165 23.3168 19.5887 23.6494 20.5087 23.6494C20.5085 23.6494 20.5088 23.6494 20.5087 23.6494C21.0844 23.6494 21.5524 23.5235 21.8612 23.2675C22.4886 22.7476 23.6563 21.7845 23.6485 20.6405C23.6442 20.0269 23.3088 19.4519 22.6514 18.9221Z"
                                          fill="white"/>
                                </svg>
                                <span>
                                    <?=$arResult['DISPLAY_PROPERTIES']['BROKER_PHONE']['VALUE']?>
                                </span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer__bottom-container">
        <div class="footer__bottom">
            <p class="footer__bottom--text">
                <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_1']['VALUE']?>
            </p>
            <div class="footer__bottom--box">
                <a class="footer__bottom--link-policy"
                   href="<?=$arResult['DISPLAY_PROPERTIES']['CONFIDENCE']['FILE_VALUE']['SRC']?>">
                    <?=$arResult['PROPERTIES']['CONFIDENCE']['NAME']?>
                </a>
                <a class="footer__bottom--link"
                   href="<?=$arResult['DISPLAY_PROPERTIES']['TERMS']['FILE_VALUE']['SRC']?>">
                    <?=$arResult['PROPERTIES']['TERMS']['NAME']?>
                </a>
                <a  class="footer__bottom--link"
                    href="<?=$arResult['DISPLAY_PROPERTIES']['BANK_DETAILS']['FILE_VALUE']['SRC']?>">
                    <?=$arResult['PROPERTIES']['BANK_DETAILS']['NAME']?>
                </a>
            </div>
        </div>
        <div class="footer__bottom--dev">
            <p class="footer__bottom--dev-text">
                <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_2']['VALUE']?>
                <span class="footer__bottom--dev-name">
                    <?=$arResult['DISPLAY_PROPERTIES']['DISCLAMER_3']['VALUE']?>
                </span>
            </p>
        </div>
    </div>
</footer>
