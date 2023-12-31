    <label for="titulo">Título</label>
    <input id="titulo" type="text" name="titulo" 
        value = "<?php echo $pelicula['titulo']; ?>"
        placeholder="Ingrese un título...">
    <br>
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" for="descripcion" name="descripcion" 
        placeholder="Ingrese la descripción..."><?php echo $pelicula['descripcion']; ?></textarea>
    <br>
    <button type="submit"><?php echo $op; ?></button>