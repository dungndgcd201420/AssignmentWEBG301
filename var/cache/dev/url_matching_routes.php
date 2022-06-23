<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/inventory' => [[['_route' => 'app_inventory', '_controller' => 'App\\Controller\\InventoryController::index'], null, null, null, false, false, null]],
        '/inventory/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\InventoryController::directToContact'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, false, false, null]],
        '/products/album' => [[['_route' => 'album_index', '_controller' => 'App\\Controller\\ProductsController::ShowAllAlbum'], null, null, null, false, false, null]],
        '/products/album/new' => [[['_route' => 'album_new', '_controller' => 'App\\Controller\\ProductsController::newAlbum'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/products/album/([^/]++)(*:31)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:69)'
                    .'|wdt/([^/]++)(*:88)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:133)'
                            .'|router(*:147)'
                            .'|exception(?'
                                .'|(*:167)'
                                .'|\\.css(*:180)'
                            .')'
                        .')'
                        .'|(*:190)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'album_show', '_controller' => 'App\\Controller\\ProductsController::showOneAlbum'], ['id'], null, null, false, true, null]],
        69 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        88 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        147 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        167 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        180 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        190 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
