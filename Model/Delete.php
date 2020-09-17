<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Creating the proper connection and getting the Id to delete the proper user from the database
        // We're calling the class method "delete_personas" to carry this action
                
        require_once("Object_person.php");

        require_once("Person_Model.php");
        
        $person_object = new Object_person();

        $person_model = new Personas_modelo();

        $person_object->setId($_GET["Id"]);

        $person_model->delete_personas($person_object);

    ?>
</body>
</html>