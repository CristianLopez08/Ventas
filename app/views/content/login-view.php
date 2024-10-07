<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,1,0" />

<div class="main-container">
    <form class="box login" action="" method="POST" autocomplete="off" style="display: flex; align-items: flex-start; flex-direction: column;">
        
        <!-- Contenedor del Header -->
        <div style="padding: 0px; margin-bottom: 20px; display: flex; justify-content: center; align-items: center; padding-left: 450px;"> <!-- Se eliminó border-bottom -->
            <h5 class="title is-5" style="margin: 0; font-size: 32px; color: #A6026C;">INICIAR SESIÓN</h5>
        </div>


        <div style="display: flex; flex-grow: 1; align-items: flex-start;">
            <img src="http://localhost/VENTAS/app/views/img/LogoLACAPI.png" alt="Logo" style="width: 500px; height: auto; margin-right: 50px;">
            
            <div style="flex-grow: 1;">
                <?php
                    if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
                        $insLogin->iniciarSesionControlador();
                    }
                ?>
				<div class="field" style="margin-bottom: 100px;"></div>

                <div class="field" style="margin-bottom: 100px;">
                    <div class="control" style="position: relative; display: inline-block;">
                      <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required placeholder="Usuario" style="width: 500px; padding-left: 80px; border-radius: 50px; border: 2px solid grey; font-size: 26px;">
                      <span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 36px; color: #c6d6d6;">person</span>
                    </div>
                </div>


                <div class="field" style="margin-bottom: 15px;">
                    <div class="control" style="position: relative; display: inline-block;">
                        <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required placeholder="************" style="width: 500px; padding-left: 80px; border-radius: 50px; border: 2px solid grey; font-size: 26px;">
						<span class="material-symbols-outlined" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 36px; color: #c6d6d6;">lock</span>
                    </div>
                </div>
                
				<div style="color: #A6026C; margin-bottom: 90px; display: flex; align-items: center; justify-content: space-between;">
					<label style="margin-right: 10px;">
						<input type="checkbox" name="remember_me" style="transform: scale(1.7); margin-right: 10px;">
						Recordar contraseña
					</label>
					<a href="/recuperar-contrasena" style="color: #A6026C;">¿Olvidaste tu contraseña?</a>
				</div>


				<p class="mb-4 mt-3 "style="text-align: right; margin-bottom: 500px; ">
                    <button id="submitButton" type="submit" class="button is-info is-rounded" 
					style="padding: 18px 47px; background-color: #A6026C; color: white; border: none; border-radius: 80px; font-size: 28px; font-weight: bold;">ENTRAR</button>
                </p>

				<script>
                    const button = document.getElementById('submitButton');
    
                    button.addEventListener('click', function() {
                        button.style.backgroundColor = '#FFAB03'; // Cambia el color de fondo al hacer clic
                    });
                </script>
            </div>
        </div>
    </form>
</div>
