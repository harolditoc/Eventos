<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_promotor_index', '_controller' => 'App\\Controller\\PromotorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_promotor_new', '_controller' => 'App\\Controller\\PromotorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/qr/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\PromotorController::verQr'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-(?'
                    .'|code/([^/]++)/([\\w\\W]+)(*:38)'
                    .'|promotor/([^/]++)(*:62)'
                .')'
                .'|/_components/([^/]++)(?:/([^/]++))?(*:105)'
                .'|/promotor/([^/]++)(*:131)'
                .'|/descargar/([^/]++)(*:158)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        62 => [[['_route' => 'app_promotor_show2', '_controller' => 'App\\Controller\\PromotorController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        131 => [[['_route' => 'app_promotor_show', '_controller' => 'App\\Controller\\PromotorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        158 => [
            [['_route' => 'app_down', '_controller' => 'App\\Controller\\PromotorController::downloadAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
