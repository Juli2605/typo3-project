<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use VENDOR\Autohaus\Controller\AutoController;
defined('TYPO3') or die();

ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:autohaus/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
);

(static function () {
    ExtensionUtility::configurePlugin(
        'Autohaus',
        'AutoPlugin',
        [
            AutoController::class => 'list, detail, form, book',
        ],
        // non-cacheable actions
        [
            AutoController::class => 'list, detail, form, book',
        ]
    );
})();

