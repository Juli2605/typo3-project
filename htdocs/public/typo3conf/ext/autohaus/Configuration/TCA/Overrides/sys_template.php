<?php

defined('TYPO3') or die();
// Add static TypoScript templates.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'autohaus',
    'Configuration/TypoScript/General/',
    'Autohaus Base Extension - Basis'
);