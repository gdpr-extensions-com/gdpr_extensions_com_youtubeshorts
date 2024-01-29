<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GdprExtensionsComYoutubeshorts',
        'gdpryoutubeshorts',
        [
            \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprYoutubeShortsController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprYoutubeShortsController::class => '',
            \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprManagerController::class => 'create, update, delete'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // register plugin for cookie widget
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GdprExtensionsComYoutubeShorts',
        'gdprcookiewidget',
        [
            \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprCookieWidgetController::class => 'index'
        ],
        // non-cacheable actions
        [],
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    gdprcookiewidget {
                        iconIdentifier = gdpr_extensions_com_youtubeshorts-plugin-gdpryoutubeshorts
                        title = cookie
                        description = LLL:EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtubeshorts_gdpryoutubeshorts.description
                        tt_content_defValues {
                            CType = list
                            list_type = gdprextensionscomyoutubeshorts_gdprcookiewidget
                        }
                    }
                }
                show = *
            }
       }'
    );
    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.common {
                elements {
                    gdpryoutubeshorts {
                        iconIdentifier = gdpr_extensions_com_youtubeshorts-plugin-gdpryoutubeshorts
                        title = LLL:EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtubeshorts_gdpryoutubeshorts.name
                        description = LLL:EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtubeshorts_gdpryoutubeshorts.description
                        tt_content_defValues {
                            CType = gdprextensionscomyoutubeshorts_gdpryoutubeshorts
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
