<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('asset/styles.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Formulario de Registro e Inicio de Sesión</title>
</head>
<body>
  <div class="container-form register">
    <div class="information">
      <div class="info-childs">
        <h2>Bienvenido</h2>
        <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
        <input type="button" value="Iniciar Sesión" id="sign-in">
      </div>
    </div>
    <div class="form-information">
      <div class="form-information-childs">
        <h2>Crear una Cuenta</h2>
        <div class="icons">
          <i class='bx bxl-google'></i>
          <i class='bx bxl-github'></i>
          <i class='bx bxl-linkedin'></i>
        </div>
        <p>o usa tu email para registrarte</p>
        <form action="validar_registro.php" method="post" class="form">
          <label>
            <i class='bx bx-user'></i>
            <input type="text" placeholder="Nombre Completo" name="nombre">
          </label>
          <label>
            <i class='bx bx-envelope'></i>
            <input type="email" placeholder="Correo Electrónico" name="email">
          </label>
          <label>
            <i class='bx bx-lock-alt'></i>
            <input type="password" placeholder="Contraseña" name="contraseña">
          </label>
          <input type="submit" value="Registrarse">
        </form>
      </div>
    </div>
  </div>

  <div class="container-form login hide">
    <div class="information">
      <div class="info-childs">
        <h2>¡¡Bienvenido Nuevamente!!</h2>
        <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
        <input type="button" value="Registrarse" id="sign-up">
      </div>
    </div>
    <div class="form-information">
      <div class="form-information-childs">
        <h2>Iniciar Sesión</h2>
        <div class="icons">
          <i class='bx bxl-google'></i>
          <i class='bx bxl-github'></i>
          <i class='bx bxl-linkedin'></i>
        </div>
        <p>Iniciar Sesión con una cuenta</p>
        <form action="validar_login.php" method="post" class="form">
          <label>
            <i class='bx bx-envelope'></i>
            <input type="email" placeholder="Correo Electrónico" name="email">
          </label>
          <label>
            <i class='bx bx-lock-alt'></i>
            <input type="password" placeholder="Contraseña" name="contraseña">
          </label>
          <input type="submit" value="Iniciar Sesión">
        </form>
      </div>
    </div>
  </div>
  <script src="{{asset('asset/script.js')}}"></script>
</body>
</html>
