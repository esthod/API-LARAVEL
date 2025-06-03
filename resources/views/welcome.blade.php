<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crea tu cuenta</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
  <style>
    /* Base y fondo */
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: linear-gradient(to right, #ffe3f2, #f5e6ff);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 2rem;
    }

    /* Tarjeta principal */
    .form-container {
      background: #fff;
      padding: 3rem 2.5rem;
      border-radius: 28px;
      box-shadow: 0 12px 35px rgba(199, 108, 174, 0.25);
      max-width: 450px;
      width: 100%;
      position: relative;
      animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.97); }
      to { opacity: 1; transform: scale(1); }
    }

    /* Ícono decorativo arriba */
    .form-container::before {
      content: "✨";
      position: absolute;
      top: -25px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 2.2rem;
      background: #fff;
      padding: 0.5rem;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(199, 108, 174, 0.2);
    }

    /* Encabezado */
    h2 {
      font-family: 'Pacifico', cursive;
      text-align: center;
      font-size: 2.1rem;
      color: #c76cae;
      margin-bottom: 2rem;
    }

    /* Mensaje de éxito */
    .success-msg {
      background: #e0f7ec;
      color: #087f5b;
      padding: 1rem;
      border-radius: 12px;
      text-align: center;
      font-weight: 700;
      margin-bottom: 1.5rem;
      border: 1px solid #a6e9cd;
    }

    /* Etiquetas e inputs */
    label {
      font-weight: 700;
      font-size: 0.95rem;
      color: #a2467c;
      margin-bottom: 0.4rem;
      display: block;
    }

    input {
      width: 100%;
      padding: 0.85rem;
      margin-bottom: 1.4rem;
      border: 1.5px solid #f3c4df;
      border-radius: 14px;
      background-color: #fffafc;
      font-size: 1rem;
      transition: all 0.25s ease;
    }

    input:focus {
      outline: none;
      border-color: #c76cae;
      background-color: #fff0fa;
    }

    /* Botón principal */
    button {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(to right, #f48fb1, #c084fc);
      border: none;
      border-radius: 16px;
      color: white;
      font-weight: 800;
      font-size: 1.1rem;
      box-shadow: 0 8px 25px rgba(210, 145, 188, 0.5);
      cursor: pointer;
      transition: transform 0.2s ease, background 0.3s ease;
    }

    button:hover {
      background: linear-gradient(to right, #c084fc, #f48fb1);
      transform: scale(1.03);
    }

    button:focus {
      outline: 3px solid #a75db9;
    }

    /* Pie con enlace */
    .footer-text {
      text-align: center;
      margin-top: 1.8rem;
      font-size: 0.95rem;
      color: #7e3a63;
    }

    .footer-text a {
      color: #b65787;
      text-decoration: none;
      font-weight: bold;
    }

    .footer-text a:hover {
      text-decoration: underline;
      color: #9b3e75;
    }

    /* Responsive */
    @media (max-width: 500px) {
      .form-container {
        padding: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="form-container" role="form" aria-label="Formulario de registro de cuenta">
    <h2>¡Crea tu cuenta!</h2>

    @if(session('success'))
      <div class="success-msg" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <form action="/store" method="post">
      @csrf

      <label for="name">Nombre completo</label>
      <input type="text" id="name" name="name" placeholder="Ej: Sofía Ramírez" required>

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="********" required>

      <button type="submit">Crear cuenta</button>
    </form>

    <div class="footer-text">
      ¿Ya tienes cuenta? <a href="/login">Inicia sesión aquí</a>
    </div>
  </div>
</body>
</html>
