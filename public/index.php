<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="..\util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="..\util\bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet"h
</head>

<body>

    <?php

require_once  __DIR__ . '/../controllers/ProfesorController.php';

    $profesor = new ProfesorController();

    $action = $_GET['action'] ?? "index";
    $id_codigo = $_GET['id_codigo'] ?? null;

    switch ($action) {
        case "index":
            $profesor->index();
            break;
        case "editar":
            $profesor->find($id_codigo);
            break;

        case "update";
            $id_codigo = $_GET['id_codigo'];
            $Nombre_Apellido= $_POST['NombreApellido'];
            $correo = $_POST['correo'];
            $profesor->update($id_codigo, $Nombre_Apellido, $corr);

            break;

        case "create":
            $profesor->create();
            break;
        case "store":
            $profesor->store($_POST);
            break;
    }

    /*
    require_once  __DIR__ . '/../controllers/UsuarioController.php';

    $usuario = new UsuarioController();

    $action = $_GET['action'] ?? "index";
    $id = $_GET['id'] ?? null;

    switch ($action) {
        case "index":
            $usuario->index();
            break;
        case "editar":
            $usuario->find($id);
            break;

        case "update";
            $id = $_GET['id'];
            $name = $_POST['name'];
            $lastName = $_POST['lastName'];
            $usuario->update($id, $name, $lastName);

            break;

        case "create":
            $usuario->create();
            break;
        case "store":
            $usuario->store($_POST);
            break;
    }
*/
    //$usuario->index();
    
    ?>
</body>

</html>