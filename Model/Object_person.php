<?php 

    class Object_person {

        // Properties

        private $Id;

        private $Nombre;

        private $Apellido;

        private $Direccion;

        // Access methods

        public function getId() {
            return $this->Id;
        }

        public function setId($Id) {
            $this->Id = $Id;
        }

        public function getName() {
            return $this->Nombre;
        }

        public function setName($Nombre) {
            $this->Nombre = $Nombre;
        }

        public function getLastname() {
            return $this->Apellido;
        }

        public function setLastname($Apellido) {
            $this->Apellido = $Apellido;
        }

        public function getAddress() {
            return $this->Direccion;
        }

        public function setAddress($Direccion) {
            $this->Direccion = $Direccion;
        }

    }

?>