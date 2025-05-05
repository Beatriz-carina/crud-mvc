<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Editar :.</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="index.php?action=update&id=<?php echo $_GET['id'];?>" method="POST">
<div class="mb-3">
    <label for="" class="form-label">id</label>
        <input type="text" class="form-control" name="id" disabled value=<?php echo $_GET['id'];?>

        <label for="" class="form-label">name</label> 
        <input type="text" class="form-control"  placeholder="Ingresar un nombre .." name="name" value=<?php echo $_GET['name'];?>> <br>


        <label for="" class="form-label">lastName</label> 
         <input type="text" class="form-control" placeholder="Ingresar un apellido .." name="lastName"value=<?php echo $_GET['lastName'];?>> <br>
        <button class="btn btn-primary"> Editar </button>
     </form>
   

</body>
</html>
