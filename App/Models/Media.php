<?php

    declare(strict_types=1);

    namespace App\Models;

    /**
     * Modelo da entidade Mídia.
     * @author Mário Guilherme
     */
    class Media {
        public int $id_media;
        public string $name;
        public string $type;
        public int $size;
        public string $filename;
        public string $description;
    }