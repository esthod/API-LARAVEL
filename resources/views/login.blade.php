<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceder</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom right, #ffe3f1, #f3e8ff);
      font-family: 'Quicksand', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .login-wrapper {
      background-color: #fff;
      padding: 3rem 2.2rem;
      border-radius: 28px;
      box-shadow: 0 8px 25px rgba(200, 128, 190, 0.2);
      width: 100%;
      max-width: 400px;
      position: relative;
      animation: rise 0.5s ease-in-out;
    }

    @keyframes rise {
      from { opacity: 0; transform: scale(0.96); }
      to { opacity: 1; transform: scale(1); }
    }

    .login-wrapper::before {
      content: "🌸";
      position: absolute;
      font-size: 2.5rem;
      top: -30px;
      right: -30px;
      background: #fff;
      border-radius: 50%;
      padding: 0.4rem;
      box-shadow: 0 4px 12px rgba(233, 145, 175, 0.3);
    }

    .login-wrapper h1 {
      text-align: center;
      color: #b0558f;
      font-family: 'Pacifico', cursive;
      margin-bottom: 2rem;
      font-size: 1.9rem;
    }

    label {
      font-weight: 600;
      color: #973d78;
      margin-bottom: 0.3rem;
      display: block;
      font-size: 0.95rem;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.8rem;
      border-radius: 14px;
      border: 1.5px solid #ecc9e4;
      background-color: #fff7fb;
      margin-bottom: 1.5rem;
      font-size: 1rem;
      transition: 0.3s ease;
    }

    input:focus {
      outline: none;
      border-color: #c084fc;
      background-color: #fce9f7;
    }

    button {
      width: 100%;
      padding: 1rem;
      border: none;
      background: linear-gradient(to right, #e980b1, #b484fd);
      color: #fff;
      font-weight: bold;
      font-size: 1.05rem;
      border-radius: 16px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    button:hover {
      transform: scale(1.03);
      background: linear-gradient(to right, #b484fd, #e980b1);
    }

    .text-link {
      text-align: center;
      margin-top: 1.6rem;
      font-size: 0.93rem;
      color: #8c4c75;
    }

    .text-link a {
      color: #c574a9;
      font-weight: 600;
      text-decoration: none;
    }

    .text-link a:hover {
      color: #9c3e7a;
      text-decoration: underline;
    }

    @media (max-width: 450px) {
      .login-wrapper {
        padding: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <h1>¡Hola de nuevo!</h1>

    @if(session('error'))
      <div class="error-message" style="color: #c94f7e; background: #ffe6ef; padding: 0.8rem; border-radius: 10px; text-align: center; margin-bottom: 1rem;">
        {{ session('error') }}
      </div>
    @endif

    <form action="/login" method="post">
      @csrf

      <label for="email">Correo de acceso</label>
      <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>

      <label for="password">Tu clave secreta</label>
      <input type="password" id="password" name="password" placeholder="••••••••" required>

      <button type="submit">Entrar ahora</button>
    </form>

    <div class="text-link">
      ¿Aún no tienes cuenta? <a href="/register">Únete gratis</a>
    </div>
  </div>
</body>
</html>
