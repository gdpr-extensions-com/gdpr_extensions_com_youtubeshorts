<?php

if ((int)\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version() >= 12) {
    $allRegisteredModules = $GLOBALS['TBE_MODULES']['web'];
    if (stripos($allRegisteredModules, 'gdprmanager') == false){

        return[
            'gdprmanager' => [
                'parent' => 'web',
                'position' => [],
                'access' => 'user,group',
                'iconIdentifier' => 'gdpr_extensions_com_youtubeshorts-plugin-gdpryoutubeshorts',
                'path' => '/module/gdprmanager',
                'labels' => 'LLL:EXT:gdpr_extensions_com_youtubeshorts/Resources/Private/Language/locallang_gdprmanager.xlf',
                'extensionName' => 'GdprExtensionsComYoutubeShorts',
                'controllerActions' => [
                    \GdprExtensionsCom\GdprExtensionsComYoutubeShorts\Controller\GdprManagerController::class => [
                        'list',
                        'index',
                        'show',
                        'new',
                        'create',
                        'edit',
                        'update',
                        'delete',
                        'uploadImage'
                    ],
                ],
            ]
        ];

    }}


