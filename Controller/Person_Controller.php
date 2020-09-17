<?php

    //  Creating an object to work with select query to bring the records from the database


    require_once('Model/Person_Model.php');

    $persona = new Personas_modelo();

    $matriz_personas = $persona->get_personas();

    require_once('View/Person_view.php');



?>