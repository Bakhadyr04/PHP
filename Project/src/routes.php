<?php
//прописываем на какой запрос кто реагирует
    return [
        '~^$~' => [src\Controllers\MainController::class, 'main'],
        '~hello/(.+)~' => [src\Controllers\MainController::class, 'sayHello'],
        '~bye/(.+)~' => [src\Controllers\MainController::class, 'sayBye'],
        '~article/create~'=>[src\Controllers\ArticleController::class, 'create'],
        '~articles~' => [src\Controllers\ArticleController::class, 'index'],
        '~article/store~'=>[src\Controllers\ArticleController::class, 'store'],
        '~article/(\d+)~'=>[src\Controllers\ArticleController::class, 'show'],
        '~article/edit/(\d+)~'=>[src\Controllers\ArticleController::class, 'edit'],
        '~article/update/(\d+)~'=>[src\Controllers\ArticleController::class, 'update'],
        '~article/delete/(\d+)~'=>[src\Controllers\ArticleController::class, 'delete'],
    ];