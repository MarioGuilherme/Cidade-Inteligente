<?php

    require  __DIR__ . "/vendor/autoload.php";
    use App\Controller\ProjectController;
    use App\Controller\Page;
    new Page("Projetos", "form-project", 1, new ProjectController(), "LoadForm");