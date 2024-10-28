<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title> login </title>
    <style>
         body { /* para el fondo */
        background-color: #54EAF7; /* Fondo */
        font-family: Arial, sans-serif; /* tipo de letra */
        color:  #FFFFFF; /* color del texto */
        justify-content: Center; /* posicion del texto */
        height: auto; /* altura de la ventana */ 
        margin: 0; /* margen */
        }

        .container {
            background-color: #46C2CD; /* color del fondo container */
            padding: 100px;
            text-align: center; /* texto centrado */
            width: 900px; /* tamaño contenedor */
        }

        .h1 {
            color: #000000; /* color del titulo */
            margin-bottom: 30px; /* espacio hacia abajo del titulo */

        }

        input {
            width: calc(100% 25px);
            padding: 10px;
            margin-bottom: 30px;
            border: #2F8189; /* color del borde */
            background-color: #54EAF7; /* color del fondo */
            color: #000000; /* color de texto */
            transition: border 0.5s; /* trasicion suave del borde */
        } 

        input:focus {
            border-color: #000000; /* color del borde enfocado */
        }

        button {
            background-color: #2F8189; /* color del boton */
            border: none; /* tipo de borde */
            padding: 15px 25px; /* espaciado */
            color: #000000; /* color del texto en boton */
            font-size: larger; /* tamaño fuente */
            transition: 0.5s;
            width: 100%;
        }

        button:hover {
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inicia sesion</h1>
        <form action="Login.php" method="$_POST">
            <label for="Email">Correo Electrónico</label>
            <input type="Email" name="Correo Electrónico" id="Email" required>
            <label for="contraseña">Password</label>
            <input type="Contraseña" name="Password" id="Contraseña" required>
            <button type="submit">Entrar</button> 
        </form>
    </div>
</body>
</html>