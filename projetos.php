<?php

    require  __DIR__ . "/vendor/autoload.php";

    use App\Controllers\ProjectController;

    (new ProjectController())->Index();