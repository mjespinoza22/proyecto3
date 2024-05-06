<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'm14' && $_POST['password'] == 'm14') {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['hora'] = date("h:i:sa");
        header('Location: pagprincipal.php');
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./owncloud.png');
            background-size: cover;
        }

        .login-container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 15%;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .login-container h1 {
            text-align: center;
            color: #333;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container form input {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .login-container form button {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #0066cc;
            cursor: pointer;
        }

        .login-container form button:hover {
            background-color: #004d99;
        }

        .login-container .error {
            color: red;
            margin-top: 10px;
        }

        .owncloud-link {
            display: block;
            width: 200px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-bottom: 15%;
            text-align: center;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
            border-radius: 8px;
            color: #0066cc;
            text-decoration: none;
        }

        .owncloud-link:hover {
            color: #004d99;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar sesión</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
	<form>
	    <a href="http://10.7.34.21:8080" class="owncloud-link">Entrar a Owncloud</a>
	</form>
    </div>
</body>
</html>
