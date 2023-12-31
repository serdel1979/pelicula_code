<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>

    <h1>Categorías</h1>

    <a href="/categoria/new">Nuevo</a>

    <table>
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $cat) : ?>
                <tr>
                    <td>
                        <?php echo $cat['categoria']; ?>
                    </td>
                    <td>
                        <a href="/categoria/edit/<?php echo $cat['id']; ?>">Editar</a>
                        <form action="/categoria/delete/<?php echo $cat['id']; ?>" method="post">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>