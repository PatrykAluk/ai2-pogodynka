<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_location_index' => [[], ['_controller' => 'App\\Controller\\LocationController::index'], [], [['text', '/location/']], [], [], []],
    'app_location_new' => [[], ['_controller' => 'App\\Controller\\LocationController::new'], [], [['text', '/location/new']], [], [], []],
    'app_location_show' => [['id'], ['_controller' => 'App\\Controller\\LocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_location_edit' => [['id'], ['_controller' => 'App\\Controller\\LocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_location_delete' => [['id'], ['_controller' => 'App\\Controller\\LocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/location']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_measurement_index' => [[], ['_controller' => 'App\\Controller\\MeasurementController::index'], [], [['text', '/measurement/']], [], [], []],
    'app_measurement_new' => [[], ['_controller' => 'App\\Controller\\MeasurementController::new'], [], [['text', '/measurement/new']], [], [], []],
    'app_measurement_show' => [['id'], ['_controller' => 'App\\Controller\\MeasurementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/measurement']], [], [], []],
    'app_measurement_edit' => [['id'], ['_controller' => 'App\\Controller\\MeasurementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/measurement']], [], [], []],
    'app_measurement_delete' => [['id'], ['_controller' => 'App\\Controller\\MeasurementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/measurement']], [], [], []],
    'app_weather' => [['city', 'country'], ['country' => 'PL', '_controller' => 'App\\Controller\\WeatherController::city'], ['id' => '\\d+'], [['variable', '/', '[^/]++', 'country', true], ['variable', '/', '[^/]++', 'city', true], ['text', '/weather']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], [], []],
];
