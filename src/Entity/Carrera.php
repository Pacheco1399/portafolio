<?php

    namespace App\Entity;

    class Carrera
    {
        public int $id_carrera;
        public int $id_escuela;
        public string $title;
        public string $description;
        public string $publication_date;
        public string $modification_date;
    }