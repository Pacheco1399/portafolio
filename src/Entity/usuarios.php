<?php

namespace App\Entity;

    class Usuarios
    {
        public int $id_usuario;
        public int $id_seccion;
        public string $username;
        public string $lastname;
        public string $password;
        public string $mail;
        public int $phone;
        public int $tipo_user;
        public string $publication_date;
        public string $modification_date;

        /**
         * @param int $id_usuario
         * @param int $id_seccion
         * @param string $username
         * @param string $lastname
         * @param string $password
         * @param string $mail
         * @param int $phone
         * @param int $tipo_user
         * @param string $publication_date
         * @param string $modification_date
         */
        public function __construct(int $id_usuario, int $id_seccion, string $username, string $lastname, string $password, string $mail, int $phone, int $tipo_user, string $publication_date, string $modification_date)
        {
            $this->id_usuario = $id_usuario;
            $this->id_seccion = $id_seccion;
            $this->username = $username;
            $this->lastname = $lastname;
            $this->password = $password;
            $this->mail = $mail;
            $this->phone = $phone;
            $this->tipo_user = $tipo_user;
            $this->publication_date = $publication_date;
            $this->modification_date = $modification_date;
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
         * @return string
         */
        public function getUsername(): string
        {
            return $this->username;
        }

        /**
         * @param string $username
         */
        public function setUsername(string $username): void
        {
            $this->username = $username;
        }

        /**
         * @return string
         */
        public function getLastname(): string
        {
            return $this->lastname;
        }

        /**
         * @param string $lastname
         */
        public function setLastname(string $lastname): void
        {
            $this->lastname = $lastname;
        }

        /**
         * @return string
         */
        public function getPassword(): string
        {
            return $this->password;
        }

        /**
         * @param string $password
         */
        public function setPassword(string $password): void
        {
            $this->password = $password;
        }

        /**
         * @return string
         */
        public function getMail(): string
        {
            return $this->mail;
        }

        /**
         * @param string $mail
         */
        public function setMail(string $mail): void
        {
            $this->mail = $mail;
        }

        /**
         * @return int
         */
        public function getPhone(): int
        {
            return $this->phone;
        }

        /**
         * @param int $phone
         */
        public function setPhone(int $phone): void
        {
            $this->phone = $phone;
        }

        /**
         * @return int
         */
        public function getTipoUser(): int
        {
            return $this->tipo_user;
        }

        /**
         * @param int $tipo_user
         */
        public function setTipoUser(int $tipo_user): void
        {
            $this->tipo_user = $tipo_user;
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








