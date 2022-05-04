<?php

    namespace App\Entity;

    class Votes
    {
        public int $id_votes;
        public int $id_usuario;
        public int $id_post;
        public int $id_comentario;
        public int $up_count;
        public int $down_count;
        public string $publication_date;
        public string $modification_date;

        /**
         * @param int $id_votes
         * @param int $id_usuario
         * @param int $id_post
         * @param int $id_comentario
         * @param int $up_count
         * @param int $down_count
         * @param string $publication_date
         * @param string $modification_date
         */
        public function __construct(int $id_votes, int $id_usuario, int $id_post, int $id_comentario, int $up_count, int $down_count, string $publication_date, string $modification_date)
        {
            $this->id_votes = $id_votes;
            $this->id_usuario = $id_usuario;
            $this->id_post = $id_post;
            $this->id_comentario = $id_comentario;
            $this->up_count = $up_count;
            $this->down_count = $down_count;
            $this->publication_date = $publication_date;
            $this->modification_date = $modification_date;
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
        public function getUpCount(): int
        {
            return $this->up_count;
        }

        /**
         * @param int $up_count
         */
        public function setUpCount(int $up_count): void
        {
            $this->up_count = $up_count;
        }

        /**
         * @return int
         */
        public function getDownCount(): int
        {
            return $this->down_count;
        }

        /**
         * @param int $down_count
         */
        public function setDownCount(int $down_count): void
        {
            $this->down_count = $down_count;
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