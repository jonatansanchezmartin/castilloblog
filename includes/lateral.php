 <?php require_once "includes/helpers.php"; ?>
 
 <!-- BARRA LATERAL -->
 <aside id="sidebar">

            <?php if(isset($_SESSION["user"])): ?>

                <div id="loggedUser" class="block">
                    <h3>
                        BIenvenido, <?=$_SESSION["user"]["name"]." ".$_SESSION["user"]["lastName"]; ?>
                    </h3>

                    <!-- Botones -->

                    <a href="cerrar.php">Cerrar sesión</a>

                </div>
            <?php endif; ?>


            <div id="login" class="blockAside">
                <h3>
                    Ingresar
                </h3>


                <form action="login.php" method="POST">
                
                    <label for="email">
                        Email
                    </label>
                    <input type="text" name="email" id="emailLogin"/>

                    <p id="errorEmailLogin"></p>

                    <label for="password">
                        Contraseña
                    </label>

                    <input type="password" name="password" id="passwordLogin"/>

                    <p id="errorEmailLogin"></p>

                </form>

                <button type="submit" class="button" onclick="checkLogin()">Entrar</button>


            </div>

            <div id="register" class="blockAside">

                <h3>
                    Crear tu cuenta
                </h3>


                <form action="registro.php" method="POST">
                    
                    <label for="name">
                        Nombre
                    </label>
                    <input type="text" name="name" id="nameRegister"/>


                    <label for="lastName">
                        Apellidos
                    </label>
                    <input type="text" name="lastName" id="lastNameRegister"/>



                    <label for="email">
                        Email
                    </label>
                    <input type="text" name="email" id="emailRegister"/>



                    <label for="password">
                        Contraseña
                    </label>
                    <input type="password" name="password" id="passwordRegister"/>


                </form>

                <button type="submit" class="button" onclick="checkRegister()">Entrar</button>




            </div>

</aside>