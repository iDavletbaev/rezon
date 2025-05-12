<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult)) { ?>
    <div class="menu__menu-container">
        <ul class="menu__menu">
            <?php foreach ($arResult as $arItem) { ?>
                <li class="menu__menu-inform">
                    <a href="<?=$arItem["LINK"]?>" class="menu__desc flex">
                        <?=$arItem["TEXT"]?>
                        <svg width="10" height="17" viewBox="0 0 10 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15.5L8 8.5L1 1.5" stroke="white" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php }
