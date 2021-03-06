<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/admin/article/']], [], [], []],
    'app_article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/admin/article/new']], [], [], []],
    'app_article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/admin/categorie/']], [], [], []],
    'app_categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/admin/categorie/new']], [], [], []],
    'app_categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorie']], [], [], []],
    'app_categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorie']], [], [], []],
    'app_categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categorie']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'app_articles' => [['id'], ['_controller' => 'App\\Controller\\MainController::getArticlesById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/articles']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
];
