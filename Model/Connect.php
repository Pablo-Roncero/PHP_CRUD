<?php

    class Conectar {

        public static function conexion() {

            // Try to connect to the database through PDO extension

            try {

                $conexion = new PDO('mysql:host=localhost; dbname=curso', 'root', '');

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $conexion->exec("SET CHARACTER SET utf8");



            } catch (Exception $e) {

                die("Error " . $e->getMessage() . "Línea del error " . $e->getLine());  // Showing and error message and the line

            }

            return $conexion;

        }
    }


?>