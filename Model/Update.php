<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UPDATE RECORD</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<h1>UPDATE RECORD</h1>

<?php

  // Getting the values from the url in case update's button wasn't clicked
  // In case it was clicked, changing the values and recording them from the form on this page 

  require_once("Object_person.php");

  require_once("Person_Model.php");
  
  $person_object = new Object_person();

  $person_model = new Personas_modelo();

  if(!isset($_POST['update'])) {

    $Id = $_GET["Id"];
    
    $nombre = $_GET["nom"];

    $apellido = $_GET["apell"];

    $direccion = $_GET["dir"];

  } else {

    $person_object->setId($_POST["id"]);

    $person_object->setName(htmlentities(addslashes($_POST["nom"])));

    $person_object->setLastname(htmlentities(addslashes($_POST["ape"])));

    $person_object->setAddress(htmlentities(addslashes($_POST["dir"])));

    $person_model->update_personas($person_object);

  }


?>
<p>
 
</p>
<!-- This is a form with a table embedded that send the new records to this page and send the updates to 
the database -->

<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $Id ?>"></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre ?>"></td>
    </tr>
    <tr>
      <td>Last name</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido ?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $direccion ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="update" id="bot_actualizar" value="Update"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>