<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12 m5 offset-m3">
                <h1 class="center-align">Iniciar sesion</h1>
                <form method="POST" action="logica/loguear.php">
                    <div class="input-field">
                        <input type="text" name="usuario" id="usuario" required>
                        <label for="usuario">Usuario</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="password" name="clave" id="clave" required>
                        <label for="clave">Contraseña</label>
                    </div>
                    
                    <button type="submit" class="btn waves-effect waves-light">Iniciar Sesión</button>
                </form> 
            </div>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>