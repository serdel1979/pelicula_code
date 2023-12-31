<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>

<h1>Listado de películas</h1>

<a href="/pelicula/new">Nuevo</a>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculas as $pelicula): ?>
                <tr>
                    <td><?php echo $pelicula['id']; ?></td>
                    <td><?php echo $pelicula['titulo']; ?></td>
                    <td><?php echo $pelicula['descripcion']; ?></td>
                    <td>
                        <a href="/pelicula/edit/<?php echo $pelicula['id'] ?>">Editar</a>

                        <form action="/pelicula/delete/<?php echo $pelicula['id'] ?>" method="post">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>
</html>