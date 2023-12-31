<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Edita categoría</h1>
   
    <form action="/categoria/update/<?php echo $categoria['id'] ?>" method="post">
        <?php echo view('/categoria/_form',['opcion'=>'Actualizar']) ?>
    </form>
    
</body>
</html>