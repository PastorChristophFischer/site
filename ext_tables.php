<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Provider extension for Christoph Fischer\'s private site');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Christophoros.Site', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Christophoros.Site', 'Content');

