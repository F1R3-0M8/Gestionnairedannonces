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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/annonce' => [[['_route' => 'admin_annonce_index', '_controller' => 'App\\Controller\\AdminAnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/annonce/new' => [[['_route' => 'admin_annonce_new', '_controller' => 'App\\Controller\\AdminAnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\AdminCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\AdminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\AdminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'afficher_index', '_controller' => 'App\\Controller\\AfficherIndexController::index'], null, null, null, false, false, null]],
        '/member/annonce' => [[['_route' => 'member_annonce_index', '_controller' => 'App\\Controller\\MemberAnnonceController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_registration_register', '_controller' => 'App\\Controller\\RegistrationController::registerAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|annonce/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:248)'
                        .'|/edit(*:261)'
                        .'|(*:269)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:294)'
                        .'|/edit(*:307)'
                        .'|(*:315)'
                    .')'
                .')'
                .'|/member/annonce/([^/]++)(*:349)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'admin_annonce_show', '_controller' => 'App\\Controller\\AdminAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'admin_annonce_edit', '_controller' => 'App\\Controller\\AdminAnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'admin_annonce_delete', '_controller' => 'App\\Controller\\AdminAnnonceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        248 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\AdminCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\AdminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\AdminCategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        294 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        349 => [
            [['_route' => 'member_annonce_show', '_controller' => 'App\\Controller\\MemberAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
