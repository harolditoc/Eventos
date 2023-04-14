<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_promotor_index', '_controller' => 'App\\Controller\\PromotorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_promotor_new', '_controller' => 'App\\Controller\\PromotorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/qr/qr-codes' => [[['_route' => 'app_qr_codes', '_controller' => 'App\\Controller\\PromotorController::verQr'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/qr\\-(?'
                    .'|code/([^/]++)/([\\w\\W]+)(*:38)'
                    .'|promotor/(?'
                        .'|img/([^/]++)(*:69)'
                        .'|([^/]++)(*:84)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:124)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:165)'
                    .'|wdt/([^/]++)(*:185)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:231)'
                            .'|router(*:245)'
                            .'|exception(?'
                                .'|(*:265)'
                                .'|\\.css(*:278)'
                            .')'
                        .')'
                        .'|(*:288)'
                    .')'
                .')'
                .'|/promotor/([^/]++)(*:316)'
                .'|/descargar/([^/]++)(*:343)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        69 => [[['_route' => 'app_promotor_show2', '_controller' => 'App\\Controller\\PromotorController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_promotor_show3', '_controller' => 'App\\Controller\\PromotorController::show3'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        165 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        185 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        245 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        288 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        316 => [[['_route' => 'app_promotor_show', '_controller' => 'App\\Controller\\PromotorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        343 => [
            [['_route' => 'app_down', '_controller' => 'App\\Controller\\PromotorController::downloadAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
