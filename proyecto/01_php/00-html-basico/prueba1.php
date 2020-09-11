<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        <title>Mi primera web</title>
    </head>
    <body>
        <h1>Titulo de mi Web</h1>
        <h2>Bienvenidos a mi Web</h2>
        <strong>Hola mundo desde HTML!</strong>
        <h3>Esto es una etiqueta de nivel 3</h3>
        <h4>Esto es una etiqueta de nivel 4</h4>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>
        <p>
            Lorem Ipsum is simply dummy text of the <br/> <br/> <br/> printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and 
            <hr/>
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>
        <hr/>
        <h3>Tercer encabezado de la web</h3>
        <p>
            <em>Ipsum is simply dummy</em>  <strong>of the printing and typesetting industry</strong> of the
            <span id="resaltado" class="rojo amarillo"> and typesetting industry. </span>Lorem Ipsum 
            <blockquote>
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </blockquote>
        </p>
        <hr/>
        <h2>Imagenes en HTML</h2>
        <img src=images/iron.jpg alt="Imagen de IronMan" title="Foto de Iron" width="455px">
        <hr/>
        <h3>Formulario</h3>
        <form>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Escribe tu nombre"/>
            </p>
            <p>
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" placeholder="Escribe una descripcion"></textarea>
            </p>
            <input type="radio" name="genero" value="hombre"> Hombre <br/>
            <input type="radio" name="genero" value="mujer"> Mujer <br/>
            <input type="radio" name="genero" value="nada"> Nada <br/>
            <select name="generosdos">
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="nada">Nada</option>
            </select>
            <input type="submit" value="enviar"/>
        
        </form>
        <hr/>

        <p>
            <ol>
                <li>Manzanas</li>
                <ul>
                    <li>Rojas</li>
                    <li>Verdes</li>
                    <li>Verdes</li>
                    <li>Verdes</li>
                </ul>
                <li>Peras</li>
                <li>Conchas</li>
                <li>Conchas</li>
                <li>Conchas</li>
                <li>Mangos</li>
            </ol>
            <h3>Tabla</h3>
            <table border="1">
                <tr>
                    <th>Nombre </th>
                    <th>Apellidos </th>
                    <th>Pais</th>
                </tr>
                <tr>
                    <td>Jesus </td>
                    <td>Posada </td>
                    <td>Colombia</td>
                </tr>
                <tr>
                    <td>Jesus </td>
                    <td>Posada </td>
                    <td>Colombia</td>
                </tr>
                <tr>
                    <td>Jesus </td>
                    <td>Posada </td>
                    <td>Colombia</td>
                </tr>
                <tr>
                    <td>Manuel </td>
                    <td colspan="2">Chinchilla </td>
                </tr>
            </table>
        </p>
    </body>
</html>
