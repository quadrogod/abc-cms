<?php

use \Quadrogod\Abc\Pages\Repository;

try { // тут исключение лезет при первичной миграции, надо вкурить доку, можно ли это обойти
    $pagesRepository = new Repository();
    foreach ($pagesRepository->getPages() as $page) {
        /**
         * @var \Quadrogod\Abc\Pages\Interfaces\IModule $module
         */
        $module = new $page->module;
        $module->registerRoutes($page);
    }
} catch (Exception $e) {
    //
}