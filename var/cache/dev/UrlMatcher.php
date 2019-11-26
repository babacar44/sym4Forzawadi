<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/lists' => [
            [['_route' => 'get_lists', '_controller' => 'App\\Controller\\ListController::getListsAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'post_lists', '_controller' => 'App\\Controller\\ListController::postListsAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'put_lists', '_controller' => 'App\\Controller\\ListController::putListsAction', '_format' => 'json'], null, ['PUT' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|rticle/([^/]++)(*:27)'
                    .'|uthors/([^/]++)(*:49)'
                    .'|pi/lists/([^/]++)(?'
                        .'|(*:76)'
                        .'|/tasks(*:89)'
                        .'|(*:96)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::showAction'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'author', '_controller' => 'App\\Controller\\AuthorController::showAction'], ['id'], null, null, false, true, null]],
        76 => [[['_route' => 'get_list', '_controller' => 'App\\Controller\\ListController::getListAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'get_lists_tasks', '_controller' => 'App\\Controller\\ListController::getListsTasksAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null]],
        96 => [
            [['_route' => 'patch_lists', '_controller' => 'App\\Controller\\ListController::patchListsAction', '_format' => 'json'], ['id'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
