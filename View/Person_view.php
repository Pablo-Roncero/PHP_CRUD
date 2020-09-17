<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        

    </style>
</head>
<body> 
<?php

    require("Model/Pagination.php");

    // Getting the fields to create new records on the table

    if(isset($_POST["insert"])) {

        require_once("Model/Connect.php");

        $person_object = new Object_person();

        $person_model = new Personas_modelo();

        $person_object->setName(htmlentities(addslashes($_POST["Nom"])));

        $person_object->setLastname(htmlentities(addslashes($_POST["Ape"])));

        $person_object->setAddress(htmlentities(addslashes($_POST["Dir"])));

        $person_model->set_personas($person_object);

    }

?>

<!-- Form with a table embedded to send values in the fields to this same page -->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="50%" border="0" align="center">
<tr>
    <td class="first-row">Id</td>
    <td class="first-row">Name</td>
    <td class="first-row">Last name</td>
    <td class="first-row">Address</td>
    <td class="sin">&nbsp;</td>
    <td class="sin">&nbsp;</td>
    <td class="sin">&nbsp;</td>
</tr> 

<?php

foreach ($matriz_personas as $persona) :?>    

    <tr>
    <td><?php echo $persona["Id"]?></td>
    <td><?php echo $persona["Nombre"]?></td>
    <td><?php echo $persona["Apellido"]?></td>
    <td><?php echo $persona["Direccion"]?></td>

    <!-- In this case we're calling the Update and Delete files to make some actions on the records -->

    <td class="bot"><a href="Model/Delete.php?Id=<?php echo $persona["Id"]?>"><input type='button' name='del' id='del' value='Delete'></a></td>
    <td class='bot'><a href="Model/Update.php?Id=<?php echo $persona["Id"]?> & nom=<?php echo $persona["Nombre"]?>& apell=<?php echo $persona["Apellido"]?> & dir=<?php echo $persona["Direccion"]?>"><input type='button' name='update' id='up' value='Update'></a></td>
</tr>  

<?php
endforeach;
?>

<tr>
<td></td>
    <td><input type='text' name='Nom' size='10' class='centrado'></td>
    <td><input type='text' name='Ape' size='10' class='centrado'></td>
    <td><input type='text' name=' Dir' size='10' class='centrado'></td>
    <td class='bot'><input type='submit' name='insert' id='cr' value='Insert'></td></tr>    
    <tr><td><?php

for ($i = 1; $i<=$total_paginas;$i++) {

    echo "<a class='pagination' href='?pagina=" . $i . "'>" . $i . "</a> ";
}
?>
</td></tr>
</table>

</form>


</table>

</body>
</html>