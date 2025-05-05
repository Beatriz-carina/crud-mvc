<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="util\bootstrap\js\bootstrap.min.js"></script>
    <title>.: Profesores </title>
</head>
<body>
   <?php include __DIR__ .'/../../public/navbar.php'?>
    <h1>Lista de profesores</h1>
    <a href="index.php?action=create"> new user</a>
    <table class="table">
        <tr>
            <td>id_codigo</td>
            <td>NombreApellido</td>
            <td>correo</td>
            <td>Action</td>
        </tr>
        
        <?php
            foreach ($profesores as $profesor) {
                //echo $usuario['id'];
                echo "<tr>
                        <td>$profesor[id_codigo]</td>
                        <td>$profesor[NombreApellido]</td>
                        <td>$profesor[correo]</td>
                        <td>
                            <a href=index.php?action=editar&id=$profesor[id_codigo]&NombreApellido=$profesor[NombreApellido]&correo=$profesor[correo]>Editar</a>
                            <a href=index.php?action=eliminar&id=$profesor[id_codigo]&NombreApellido=$profesor[nameApellido]&correo=$profesor[correo]>Eliminar</a>
                        <td>
                    </tr>";
            }
        ?>
    </table>
    <?php
        //var_dump($usuarios);
    ?>
</body>
</html>
