<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Perfil de Usuario</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&family=Playfair+Display:wght@600&display=swap');

    body {
      margin: 0;
      font-family: 'Outfit', sans-serif;
      background: linear-gradient(135deg, #fdf0f3, #f9dbe9);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: #ffffff;
      border-radius: 28px;
      padding: 3.5rem 3rem;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 20px 60px rgba(230, 140, 170, 0.25);
      position: relative;
      transition: transform 0.3s ease;
      border: 1.5px solid #f4aac0;
    }

    .card:hover {
      transform: translateY(-4px);
    }

    h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.3rem;
      text-align: center;
      color: #c92a6d;
      margin-bottom: 2rem;
      letter-spacing: 0.5px;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #a13357;
      font-size: 1rem;
    }

    input {
      width: 100%;
      padding: 0.9rem 1rem;
      margin-bottom: 1.6rem;
      border: 2px solid #fbd0dc;
      border-radius: 16px;
      background: #fff6f9;
      font-size: 1.05rem;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #e06d91;
      background-color: #fff0f6;
      outline: none;
      box-shadow: 0 0 10px #f7c3d4aa;
    }

    button {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(90deg, #f35c91, #d13571);
      color: #fff;
      border: none;
      border-radius: 18px;
      font-size: 1.15rem;
      font-weight: 700;
      cursor: pointer;
      box-shadow: 0 6px 20px rgba(243, 92, 145, 0.5);
      transition: background 0.3s ease, transform 0.2s ease;
    }

    button:hover {
      transform: scale(1.02);
      background: linear-gradient(90deg, #d13571, #f35c91);
    }

    .back-link {
      display: block;
      margin-top: 2rem;
      text-align: center;
      font-weight: 600;
      color: #c92a6d;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .back-link:hover {
      color: #a41f56;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>✨ Actualiza tu perfil ✨</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label for="name">Nombre completo</label>
      <input type="text" id="name" name="name" value="{{ $user->name }}" required />

      <label for="email">Correo elegante</label>
      <input type="email" id="email" name="email" value="{{ $user->email }}" required />

      <label for="password">Nueva clave secreta</label>
      <input type="password" id="password" name="password" placeholder="Déjala vacía si no cambia" />

      <button type="submit">Guardar Cambios</button>
    </form>
    <a href="{{ url('/usuarios') }}" class="back-link">← Volver a la lista</a>
  </div>
</body>
</html>
