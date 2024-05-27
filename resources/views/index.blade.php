<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('asset/login.css') }}">
  <title>Página de Inicio - Hospital</title>
</head>
<body>
  <h1>Bienvenido al Hospital</h1>
  
  <h2>Acerca de Nosotros</h2>
  <p>Aquí puedes agregar información sobre el hospital y su historia.</p>
  
  <h2>Contacto</h2>
  <p>Aquí puedes agregar información de contacto, como dirección, teléfono y correo electrónico.</p>
  
  <h2>Servicios</h2>
  <ul>
    <li>Servicio 1</li>
    <li>Servicio 2</li>
    <li>Servicio 3</li>
  </ul>
  
  <h2>Iniciar sesión</h2>s
    <div>
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required autofocus>
    </div>
    <div>
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div>
      <input type="checkbox" id="remember" name="remember">
      <label for="remember">Recordarme</label>
    </div>
    <div>
      <button type="submit">Iniciar sesión</button>
    </div>
  </form>
</body>
</html>