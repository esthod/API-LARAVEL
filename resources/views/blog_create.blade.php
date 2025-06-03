<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario Bonito</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fff0f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background: #ffffff;
      padding: 2rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #d63384;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #6c3483;
      font-weight: 500;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px 15px;
      margin-bottom: 1rem;
      border: 2px solid #f8c3da;
      border-radius: 10px;
      background-color: #fff5f8;
      font-size: 1rem;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    textarea:focus {
      border-color: #d63384;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button,
    .redirect-button {
      width: 100%;
      padding: 12px;
      background-color: #d63384;
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 10px;
      text-align: center;
      text-decoration: none;
      display: block;
    }

    button:hover,
    .redirect-button:hover {
      background-color: #c2185b;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Publicar</h2>
    <form action="/posts" method="POST">
      @csrf
      <label for="title">Título</label>
      <input type="text" id="title" name="title" placeholder="Escribe un título bonito" required />

      <label for="content">Contenido</label>
      <textarea id="content" name="content" placeholder="Comparte algo lindo..." required></textarea>

      <button type="submit">Enviar</button>
    </form>

    <!-- Botón para ir al listado de blogs -->
    <a href="/posts" class="redirect-button">Ver Blogs Publicados</a>
  </div>
</body>
</html>
