<?php
    class Cliente{
        private string $nombre;
        private string $email;

        public function __construct(string $nom, string $email) {
            $this->nombre = $nom;
            $this->email = $email;
        }

        public function __toString() {
            return "$this->nombre  ($this->email)";
        }

        public function setNombre(string $nom){
            $this->nombre = $nom;
        }
        public function setEmail(string $email){
            $this->email  =$email;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getEmail(){
            return $this->email;
        }
    }


?> 