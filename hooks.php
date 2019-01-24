<?php

require_once "config" . DIRECTORY_SEPARATOR . "config.php";

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
    $newMenu = $primaryNavbar->addChild(
        BRAND_NAME,
        array(
            'name' => BRAND_NAME,
            'uri' => 'index.php?m=whois',
            'order' => 99
        )
    );

});