<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva película</title>
</head>
<body>
    <label>Nueva película</label>

    <form action="/pelicula/create" method="post">
        <?php echo View('pelicula/_form', ['op'=>'Crear']) ?>
    </form>
    
</body>
</html>