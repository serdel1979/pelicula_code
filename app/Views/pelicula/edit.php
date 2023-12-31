<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de película</title>
</head>
<body>
<label>Edita película</label>

<form action="/pelicula/update/<?php echo $pelicula['id']; ?>" method="post">
    <?php echo View('pelicula/_form', ['op'=>'Actualizar']) ?>
</form>
</body>
</html>