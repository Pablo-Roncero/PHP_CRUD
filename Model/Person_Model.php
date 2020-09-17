<?php

    //  On this file we have the connection to the database and the main functions to make the CRUD works

    include_once("Object_person.php");

    include_once("Connect.php");

    class Personas_modelo {

        private $db;

        private $personas;

        public function __construct()
        {

            $this->db=Conectar::conexion(); 

            $this->personas=array();

        }
            
        public function get_personas() {

            require_once("Pagination.php");

            $consulta = $this->db->query("SELECT * FROM CRUD_USUARIOS LIMIT $empezar_desde, $tamaño_pagina");

            while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {

                $this->personas[] = $filas;

            }

            return $this->personas;

        }

        public function update_personas(Object_person $person_update) {

            $sql = "UPDATE CRUD_USUARIOS SET Nombre='" . $person_update->getName() . "', Apellido='" . $person_update->getLastname() . "', Direccion='" . $person_update->getAddress() ."' WHERE Id='" . $person_update->getId() . "'";

            $this->db=Conectar::conexion();

            $this->db->exec($sql);

            header("location:../index.php");

        }

        public function delete_personas(Object_person $person_deleted) {

            $sql = "DELETE FROM CRUD_USUARIOS WHERE ID= '" . $person_deleted->getId() . "'";

            $this->db=Conectar::conexion(); 

            $this->db->exec($sql);

            header("location:../index.php");

        }

        public function set_personas(Object_person $person_create) {

            $sql = "INSERT INTO CRUD_USUARIOS (Nombre, Apellido, Direccion) VALUES ('" . $person_create->getName() . "','" . $person_create->getLastname() . "','" . $person_create->getAddress() . "')";

            $this->db=Conectar::conexion(); 

            $this->db->exec($sql);

            header("location:index.php");

        }



    }



?>