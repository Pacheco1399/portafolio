<?php

namespace App\Entity;

    class Comentario
    {
        public int $id_comentario;
        public int $id_usuario;
        public int $id_seccion;
        public int $id_post;
        public int $id_votes;
        public string $title;
        public string $description;
        public string $publication_date;
        public string $modification_date;

        /**
         * @param int $id_comentario
         * @param int $id_usuario
         * @param int $id_seccion
         * @param int $id_post
         * @param int $id_votes
         * @param string $title
         * @param string $description
         * @param string $publication_date
         * @param string $modification_date
         */
        public function __construct(int $id_comentario, int $id_usuario, int $id_seccion, int $id_post, int $id_votes, string $title, string $description, string $publication_date, string $modification_date)
        {
            $this->id_comentario = $id_comentario;
            $this->id_usuario = $id_usuario;
            $this->id_seccion = $id_seccion;
            $this->id_post = $id_post;
            $this->id_votes = $id_votes;
            $this->title = $title;
            $this->description = $description;
            $this->publication_date = $publication_date;
            $this->modification_date = $modification_date;
        }

        /**
         * @return int
         */
        public function getIdComentario(): int
        {
            return $this->id_comentario;
        }

        /**
         * @param int $id_comentario
         */
        public function setIdComentario(int $id_comentario): void
        {
            $this->id_comentario = $id_comentario;
        }

        /**
         * @return int
         */
        public function getIdUsuario(): int
        {
            return $this->id_usuario;
        }

        /**
         * @param int $id_usuario
         */
        public function setIdUsuario(int $id_usuario): void
        {
            $this->id_usuario = $id_usuario;
        }

        /**
         * @return int
         */
        public function getIdSeccion(): int
        {
            return $this->id_seccion;
        }

        /**
         * @param int $id_seccion
         */
        public function setIdSeccion(int $id_seccion): void
        {
            $this->id_seccion = $id_seccion;
        }

        /**
         * @return int
         */
        public function getIdPost(): int
        {
            return $this->id_post;
        }

        /**
         * @param int $id_post
         */
        public function setIdPost(int $id_post): void
        {
            $this->id_post = $id_post;
        }

        /**
         * @return int
         */
        public function getIdVotes(): int
        {
            return $this->id_votes;
        }

        /**
         * @param int $id_votes
         */
        public function setIdVotes(int $id_votes): void
        {
            $this->id_votes = $id_votes;
        }

        /**
         * @return string
         */
        public function getTitle(): string
        {
            return $this->title;
        }

        /**
         * @param string $title
         */
        public function setTitle(string $title): void
        {
            $this->title = $title;
        }

        /**
         * @return string
         */
        public function getDescription(): string
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription(string $description): void
        {
            $this->description = $description;
        }

        /**
         * @return string
         */
        public function getPublicationDate(): string
        {
            return $this->publication_date;
        }

        /**
         * @param string $publication_date
         */
        public function setPublicationDate(string $publication_date): void
        {
            $this->publication_date = $publication_date;
        }

        /**
         * @return string
         */
        public function getModificationDate(): string
        {
            return $this->modification_date;
        }

        /**
         * @param string $modification_date
         */
        public function setModificationDate(string $modification_date): void
        {
            $this->modification_date = $modification_date;
        }


    }
