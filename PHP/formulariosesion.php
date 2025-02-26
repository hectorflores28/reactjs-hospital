<form id="login-form" class="form" action="login/conexion.php" method="POST">
    <div class="form-group">
        <label for="username">Usuario</label><br>
            <input type="text" name="usuario" id="username" class="form-control" placeholder="Escribe tu usuario" required>
    </div>
    <div class="form-group">
        <label for="password" class="">Contraseña:</label><br>
            <input type="text" name="contrasena" id="password" class="form-control" placeholder="Escribe tu contraseña" required>
    </div>
    <div class="form-group">
        <label for="remember-me" class=""><span>Recordarme</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
            <input type="submit" name="submitLogin" class="btn btn-info btn-md" value="Enviar">
    </div>
</form>