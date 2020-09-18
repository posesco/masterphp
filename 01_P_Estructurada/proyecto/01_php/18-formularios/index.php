<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <p><input type="text" name="name" autofocus="autofocus" minlength="4" required="required"/></p>
        
        <label for="lname">Apellido: </label>
        <p><input type="text" name="lname" minlength="4" required="required"/></p>
        
        <label for="boton">Botón: </label>
        <p><input type="button" name="boton" value="Dame un Click"/></p>
       
        <label for="gender">Genero: </label>
        <p>
            Hombre: <input type="radio" name="gender" value="hombre" checked="checked"/>
            Mujer: <input type="radio" name="gender" value="mujer"/>
        
        </p>
        
        <label for="color">Color: </label>
        <p><input type="color" name="color" /></p>
        
        <label for="date">Fecha: </label>
        <p><input type="datetime-local" name="date" /></p>
        
        <label for="phone">Telefono: </label>
        <p><input type="tel" name="phone" minlength="10" placeholder="3212459330"/></p>
        
        <label for="mail">Correo Electronico: </label>
        <p><input type="email" name="mail" required="required"/></p>
        
        <label for="file">Archivo: </label>
        <p><input type="file" name="file" multiple="multiple"/></p>
        
        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass" /></p>
        <label for="term">Terminos y condiciones</label>
         <p>
            <q>
            Eligendi incidunt odio magni velit aspernatur architecto quam 
            beatae veritatis molestiae animi vero repellendus fugiat, optio debitis illum et facilis asperiores esse!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </q> 
         </p>   
         <p>
            Aceptar: <input type="checkbox" name="term" value="accepto"/>
            Rechazar: <input type="checkbox" name="term" value="rechazo"/>
         </p>

         <textarea name="texto" cols="30" rows="10"></textarea><br>

         <select name="movies">
         <option value="spiderman">Spiderman</option>
         <option value="batman">Batman</option>
         <option value="superman">Superman</option>
         </select>
        

        

        <input type="submit" value="Enviar"/>

    </form>   
</body>
</html>

