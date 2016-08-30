<?php

$inverted = false;

if(\OCP\App::isEnabled('theming')) {
   $color = \OC::$server->getThemingDefaults()->getMailHeaderColor();
   $util = new \OCA\Theming\Util();
   $inverted = $util->invertTextColor($color);
}

OCP\Util::addStyle  ( 'direct_menu', ($inverted ? 'direct_menu_inverted' : 'direct_menu') );
