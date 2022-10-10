<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_book_index' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/book/']], [], [], []],
    'app_book_new' => [[], ['_controller' => 'App\\Controller\\BookController::new'], [], [['text', '/book/new']], [], [], []],
    'app_book_show' => [['id'], ['_controller' => 'App\\Controller\\BookController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'app_book_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'app_book_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cartAdd' => [['id'], ['_controller' => 'App\\Controller\\CartController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'cartDelete' => [['id'], ['_controller' => 'App\\Controller\\CartController::deleteFromCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'cartDeleteAll' => [['id'], ['_controller' => 'App\\Controller\\CartController::deleteAllCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/deleteAll']], [], [], []],
    'app_conseils' => [[], ['_controller' => 'App\\Controller\\ConseilsController::index'], [], [['text', '/conseils']], [], [], []],
    'app_contacts' => [[], ['_controller' => 'App\\Controller\\ContactsController::index'], [], [['text', '/contacts']], [], [], []],
    'app_data_roles' => [[], ['_controller' => 'App\\Controller\\DataRolesController::index'], [], [['text', '/data']], [], [], []],
    'app_details_book' => [['id'], ['_controller' => 'App\\Controller\\DetailsBookController::showBook'], [], [['text', '/details'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_library' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'app_meeting' => [[], ['_controller' => 'App\\Controller\\MeetingController::index'], [], [['text', '/meeting']], [], [], []],
    'newslettershomeNewsletters' => [[], ['_controller' => 'App\\Controller\\NewslettersController::index'], [], [['text', '/newsletters/']], [], [], []],
    'newsletterscomfirm' => [['id', 'token'], ['_controller' => 'App\\Controller\\NewslettersController::confirm'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/newsletters/confirm']], [], [], []],
    'app_reading_tips' => [[], ['_controller' => 'App\\Controller\\ReadingTipsController::index'], [], [['text', '/reading/tips']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
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
