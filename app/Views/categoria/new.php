<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <h1>Crea categoría</h1>
   
    <form action="/categoria/create" method="post">
        <?php echo view('/categoria/_form',['opcion'=>'Guardar']) ?>
    </form>
    
</body>
</html>