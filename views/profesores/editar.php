<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Editar :.</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="index.php?action=update&id=<?php echo $_GET['id_codigo'];?>" method="POST">
<div class="mb-3">
    <label for="" class="form-label">id_codigo</label>
        <input type="text" class="form-control" NombreApellido="id_codigo" disabled value=<?php echo $_GET['id_codigo'];?>

        <label for="" class="form-label">NombreApellido</label> 
        <input type="text" class="form-control"  placeholder="Ingresar un NombreApellido .." NombreApellido="NombreApellido" value=<?php echo $_GET['NombreApellido'];?>> <br>


        <label for="" class="form-label">NombreApellido</label> 
         <input type="text" class="form-control" placeholder="Ingresar un correo.." NombreApellido="correo"value=<?php echo $_GET['correo'];?>> <br>
        <button class="btn btn-primary"> Editar </button>
     </form>
   

</body>
</html>
