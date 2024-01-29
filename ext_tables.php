<?php

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') || die();




(static function() {

    if ((int)\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version() < 12) {

        $allRegisteredModules = $GLOBALS['TBE_MODULES']['web'];
        if (stripos($allRegisteredModules, 'gdprmanager') == false){

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'GdprExtensionsComYoutubeShorts',
                'web',
                'gdprmanager',
                '',
                [
                    \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprManagerController::class => 'list,index, show, new, create, edit, update, delete,uploadImage',
                    \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\gdpryoutubeshortsController::class => 'list, index',

                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:gdpr_extensions_com_youtubeshorts/Resources/Public/Icons/user_mod_gdprmanager.svg',
                    'labels' => 'LLL:EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_gdprmanager.xlf',
                ]
            );

        }
    }



    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gdprextensionscomyoutubeshorts_domain_model_gdpryoutubeshorts', 'EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_csh_tx_gdprextensionscomyoutubeshorts_domain_model_gdpryoutubeshorts.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gdprextensionscomyoutubeshorts_domain_model_gdpryoutubeshorts');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gdprextensionscomyoutube_domain_model_gdprmanager', 'EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_csh_tx_gdprextensionscomyoutube_domain_model_gdprmanager.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gdprextensionscomyoutube_domain_model_gdprmanager');
})();
