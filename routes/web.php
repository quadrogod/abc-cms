<?php

use \Quadrogod\Abc\Pages\Repository;

$pagesRepository = new Repository();
foreach ($pagesRepository->getPages() as $page) {
    try {
        /**
         * @var \Quadrogod\Abc\Pages\Interfaces\IModule $module
         */
        $module = new $page->module;
        $module->registerRoutes($page);
    } catch (Exception $e) {
        //
    }
}
