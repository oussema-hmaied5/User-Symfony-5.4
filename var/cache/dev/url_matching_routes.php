<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/coworking' => [[['_route' => 'app_coworking_index', '_controller' => 'App\\Controller\\CoworkingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coworking/new' => [[['_route' => 'app_coworking_new', '_controller' => 'App\\Controller\\CoworkingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_user_inscription', '_controller' => 'App\\Controller\\InscriptionController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/logement' => [[['_route' => 'app_logement', '_controller' => 'App\\Controller\\LogementController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/back/user' => [[['_route' => 'back_user_index', '_controller' => 'App\\Controller\\UserBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/back/user/new' => [[['_route' => 'back_user_new', '_controller' => 'App\\Controller\\UserBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [[['_route' => 'user_profil', '_controller' => 'App\\Controller\\UserProfilController::edit'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/coworking/([^/]++)(?'
                    .'|(*:29)'
                    .'|/edit(*:41)'
                    .'|(*:48)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:92)'
                .'|/back/user/([^/]++)(?'
                    .'|(*:121)'
                    .'|/edit(*:134)'
                    .'|(*:142)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:182)'
                    .'|wdt/([^/]++)(*:202)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:248)'
                            .'|router(*:262)'
                            .'|exception(?'
                                .'|(*:282)'
                                .'|\\.css(*:295)'
                            .')'
                        .')'
                        .'|(*:305)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_coworking_show', '_controller' => 'App\\Controller\\CoworkingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_coworking_edit', '_controller' => 'App\\Controller\\CoworkingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_coworking_delete', '_controller' => 'App\\Controller\\CoworkingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        121 => [[['_route' => 'back_user_show', '_controller' => 'App\\Controller\\UserBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'back_user_edit', '_controller' => 'App\\Controller\\UserBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'back_user_delete', '_controller' => 'App\\Controller\\UserBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        182 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        202 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        248 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        262 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        282 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        295 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        305 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
