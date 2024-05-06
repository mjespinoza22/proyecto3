<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Proyecto</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            margin: 0;

            padding: 0;

            background-image: url('./owncloud.png');

            background-size: cover;

        }

        h1 {

            color: white;

        }

        h4 {

            color: white; 

        }

        ul {

            list-style-type: none;

            padding: 20px;

            background-color: #fff;

            border: 1px solid #ddd;

            border-radius: 5px;

            box-shadow: 0 2px 5px rgba(0,0,0,0.1);

            max-width: 300px;

            margin: 20px auto;

        }

        li {

            margin: 10px 0;

        }

        a {

            color: #0066cc;

            text-decoration: none;

        }

        a:hover {

            color: #004d99;

        }

        .owncloud-link {

            font-weight: bold;

            color: blue;

            font-size: 20px;

        }

    </style>

</head>
<body>

    <div style="padding: 20px; max-width: 600px; margin: 0 auto;">

        <h1>Bienvenidos a Owncloud web</h1>

        <h4>Autores: Maykel Espinoza y Jordi Adrover</h4>

        <ul>

            <li><a href="bbdd.sql">Descargar base de datos</a></li><br>

            <li><a href="conexBD.php">Conexion a la Base de Datos</a></li><br>

            <li><a href="http://10.7.34.21:8000" target="_blank">Gestión base de datos</a></li><br>

            <li><a href="http://10.7.34.21:8081">Monitorización con cAdvisor</a></li><br>

            <li><a href="#" onclick="prompt('Por favor, copia y pega este enlace en FileZilla:', 'ftp://10.7.34.21:200')">FTP</a></li><br>

            <li><a href="http://10.7.34.21:8080" class="owncloud-link">Owncloud</a></li>

        </ul>

    </div>

</body>

</html>

