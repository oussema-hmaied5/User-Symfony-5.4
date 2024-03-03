<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_coworking_index' => [[], ['_controller' => 'App\\Controller\\CoworkingController::index'], [], [['text', '/coworking/']], [], [], []],
    'app_coworking_new' => [[], ['_controller' => 'App\\Controller\\CoworkingController::new'], [], [['text', '/coworking/new']], [], [], []],
    'app_coworking_show' => [['id'], ['_controller' => 'App\\Controller\\CoworkingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coworking']], [], [], []],
    'app_coworking_edit' => [['id'], ['_controller' => 'App\\Controller\\CoworkingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coworking']], [], [], []],
    'app_coworking_delete' => [['id'], ['_controller' => 'App\\Controller\\CoworkingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coworking']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_user_inscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::new'], [], [['text', '/inscription/']], [], [], []],
    'app_logement' => [[], ['_controller' => 'App\\Controller\\LogementController::index'], [], [['text', '/logement']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'back_user_index' => [[], ['_controller' => 'App\\Controller\\UserBackController::index'], [], [['text', '/back/user/']], [], [], []],
    'back_user_new' => [[], ['_controller' => 'App\\Controller\\UserBackController::new'], [], [['text', '/back/user/new']], [], [], []],
    'back_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'back_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'back_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'user_profil' => [[], ['_controller' => 'App\\Controller\\UserProfilController::edit'], [], [['text', '/profil/']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];