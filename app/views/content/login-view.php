<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,1,0" />

<div class="main-container">
    <div class="box login" style="padding: 80px; width: 100%;">
        <!-- Columna del logo -->
        <div class="column logo-container" style="text-align: center; margin-bottom: 30px;">
            <img src="http://localhost/VENTAS/app/views/img/LogoLACAPI.png" alt="Logo" style="width: 100%; max-width: 500px; height: auto;">
        </div>

        <!-- Columna del formulario -->
        <div class="column form-container" style="flex-grow: 1;">
            <h5 class="title is-5" style="text-align: center; color: #A6026C; margin-bottom: 80px; font-size: 36px; font-weight: bold;">INICIAR SESIÓN</h5>

            <form action="" method="POST" autocomplete="off" style="display: flex; flex-direction: column; align-items: center;">
                <?php
                    if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                        $insLogin->iniciarSesionControlador();
                    }
                ?>

                <!-- Campo de usuario -->
                <div class="field" style="margin-bottom: 70px; width: 100%; max-width: 500px;">
                    <div class="control" style="position: relative;">
                        <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required
                               placeholder="Usuario" 
                               style="padding-left: 60px; border-radius: 50px; border: 2px solid grey; font-size: 26px;"
                               value="<?php echo isset($_POST['login_usuario']) ? htmlspecialchars($_POST['login_usuario']) : ''; ?>">
                        <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 36px; color: #c6d6d6;">person</span>
                    </div>
                </div>

                <!-- Campo de clave -->
                <div class="field" style="margin-bottom: 30px; width: 100%; max-width: 500px;">
                    <div class="control" style="position: relative;">
                        <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required
                               placeholder="************" 
                               style="padding-left: 60px; border-radius: 50px; border: 2px solid grey; font-size: 26px;">
                        <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 36px; color: #c6d6d6;">lock</span>
                    </div>
                </div>

                <!-- Recordar contraseña y registrar -->
                <div style="color: #A6026C; margin-bottom: 70px; display: flex; align-items: center; justify-content: space-between; width: 100%; max-width: 500px;">
                    <label style="margin-right: 10px;">
                        <input type="checkbox" name="remember_me" style="transform: scale(1.7); margin-right: 10px;">
                        Recordar contraseña
                    </label>
                    <p style="margin-top: 0; color: #A6026C;">
                        <a href="#" style="text-decoration: none; color: #A6026C; font-weight: bold;">Registrar</a>
                    </p>
                </div>

                <!-- Botón de inicio de sesión -->
                <div style="display: flex; justify-content: flex-end; width: 100%; max-width: 500px; margin-top: 20px;">
                    <p class="has-text-centered mb-4">
                        <button id="submitButton" type="submit" class="button is-info is-rounded" 
                        style="padding: 18px 30px; background-color: #A6026C; color: white; border: none; border-radius: 80px; font-size: 28px; font-weight: bold;">ENTRAR</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const button = document.getElementById('submitButton');
    button.addEventListener('click', function() {
        button.style.backgroundColor = '#FFAB03'; // Cambia el color de fondo al hacer clic
    });
</script>
