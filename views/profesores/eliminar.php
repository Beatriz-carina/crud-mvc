<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

</head>

<body>

  <h1> eliminar</h1>



<form action="index.php?action=update&id=<?php echo $_GET['id_codigo'];?>" method="POST">

    <div class="mb-3">

    <label for="" class="form-label">id_codigo</label>

    <input type="text" class="form-control" NombreApellido="id_codigo" disabled value=<?php echo $_GET['id_codigo'];?>



    <label for="" class="form-label">Nombre_apellido</label>

    <input type="text" class="form-control" placeholder="Ingresar un NombreApellido .." name="name" value=<?php echo $_GET['name'];?> > <br>





    <label for="" class="form-label">correo</label>

     <input type="text" class="form-control" placeholder="Ingresar un correo .." NombreApellido="correo" value=<?php echo $_GET['correo'];?> <br>

    <button class="btn btn-primary"> Editar </button>

</from>

<?php

     foreach ($usuario as $usuario) {

      //echo $usuario['id'];

      echo "<tr>

        <td>$usuario[id]</td>

        <td>$usuario[name]</td>

        <td>$usuario[lastname]</td>

        <td>

        <a href=index.php?action=editar&id=$usuario[id]&name=$usuario[name]&lastname=$usuario[lastname]>Editar</a> | 

        <a href=index.php?action=eliminar&id=$usuario[id]&name=$usuario[name]&lastname=$usuario[lastname]>Eliminar</a></td>

        </tr>";

     }

    ?>

</body>

</html>
