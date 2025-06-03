<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Panel de Usuarios - Diseño Fresco</title>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Pacifico&display=swap" rel="stylesheet" />
<style>
  /* Reset y base */
  *, *::before, *::after {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Nunito', sans-serif;
    background: linear-gradient(135deg, #f7d9e3, #f0e6ff);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 3rem 1rem;
    color: #5a2a4a;
  }

  /* Contenedor principal */
  .container {
    width: 100%;
    max-width: 850px;
    background: #fff;
    border-radius: 30px;
    box-shadow: 0 18px 40px rgba(199, 108, 174, 0.3);
    padding: 3rem 4rem 4rem;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* Header con título y botón Buscar */
  header {
    width: 100%;
    text-align: center;
    margin-bottom: 3rem;
  }
  header h1 {
    font-family: 'Pacifico', cursive;
    font-size: 3rem;
    margin: 0 0 0.4rem;
    user-select: none;
    color: #c76cae;
  }

  .btn-buscar {
    background-color: #d291bc;
    color: #fff;
    border: none;
    border-radius: 15px;
    padding: 1.1rem 3.2rem;
    font-size: 1.3rem;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 7px 18px rgba(210, 145, 188, 0.6);
    transition: background-color 0.3s ease, transform 0.2s ease;
    user-select: none;
  }
  .btn-buscar:hover {
    background-color: #c084fc;
    transform: scale(1.05);
  }
  .btn-buscar:focus {
    outline: 3px solid #a75db9;
  }
  .btn-blog {
    background-color: #d291bc;
    color: #fff;
    border: none;
    border-radius: 15px;
    padding: 1.1rem 3.2rem;
    font-size: 1.3rem;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 7px 18px rgba(210, 145, 188, 0.6);
    transition: background-color 0.3s ease, transform 0.2s ease;
    user-select: none;
  }

  /* Mensaje de éxito */
  .success-message {
    background-color: #e0f7ec;
    color: #087f5b;
    border-radius: 16px;
    padding: 1.2rem 2rem;
    font-weight: 700;
    font-size: 1.15rem;
    margin: 2rem 0;
    width: 100%;
    text-align: center;
    box-shadow: 0 0 12px #087f5b44;
  }

  /* Grid tarjetas usuarios */
  .users-grid {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
    gap: 2.5rem;
  }

  /* Tarjetas usuario */
  .user-card {
    background: #fff0fb;
    border-radius: 25px;
    padding: 2rem 2.5rem;
    box-shadow: 0 10px 25px rgba(199, 108, 174, 0.25);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
  }
  .user-card:hover {
    box-shadow: 0 20px 40px rgba(199, 108, 174, 0.5);
    transform: translateY(-8px);
  }

  .user-name {
    font-weight: 800;
    font-size: 1.6rem;
    margin-bottom: 0.25rem;
    color: #9c3c78;
    user-select: text;
  }
  .user-email {
    font-style: italic;
    font-size: 1.1rem;
    color: #6b7280;
    margin-bottom: 1.8rem;
    user-select: text;
  }

  /* Botones en fila, tamaño grande y redondeado */
  .actions {
    display: flex;
    gap: 1.8rem;
    width: 100%;
    justify-content: center;
  }
  button.action-btn {
    flex: 1;
    padding: 1.15rem 0;
    border: none;
    border-radius: 25px;
    font-weight: 700;
    font-size: 1.2rem;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    user-select: none;
    transition: transform 0.2s ease;
    color: #fff;
  }
  button.action-btn:focus {
    outline: 3px solid #a75db9;
  }
  .edit-btn {
    background-color: #fbbf24;
    color: #3a1f00;
    box-shadow: 0 0 20px #fbbf24aa;
  }
  .edit-btn:hover {
    background-color: #f59e0b;
    transform: scale(1.07);
  }
  .delete-btn {
    background-color: #ef4444;
    box-shadow: 0 0 25px #ef4444cc;
  }
  .delete-btn:hover {
    background-color: #dc2626;
    transform: scale(1.07);
  }

  /* Texto cuando no hay usuarios */
  .no-users {
    grid-column: 1 / -1;
    text-align: center;
    font-size: 1.4rem;
    font-style: italic;
    color: #a56b8c;
    user-select: none;
  }

  /* Footer con botón cerrar sesión */
  footer {
    margin-top: 4rem;
    width: 100%;
    text-align: center;
  }
  button.logout-btn {
    background-color: #ef4444;
    border: none;
    border-radius: 30px;
    padding: 1.25rem 4rem;
    font-size: 1.3rem;
    font-weight: 800;
    color: white;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(239, 68, 68, 0.6);
    transition: background-color 0.3s ease, transform 0.2s ease;
    user-select: none;
  }
  button.logout-btn:hover {
    background-color: #dc2626;
    transform: scale(1.08);
  }
  button.logout-btn:focus {
    outline: 3px solid #a75db9;
  }
  button.logout-btn:active {
    background-color: #b91c1c;
    transform: scale(0.98);
  }

  /* Link volver */
  a.back-link {
    display: inline-block;
    margin-top: 3rem;
    font-weight: 700;
    font-size: 1.3rem;
    color: #a855f7;
    text-decoration: none;
    user-select: none;
    transition: color 0.3s ease;
  }
  a.back-link:hover {
    color: #c76cae;
    text-decoration: underline;
  }
  a.back-link:focus {
    outline: 3px solid #a75db9;
  }

  /* Responsive */
  @media (max-width: 600px) {
    .container {
      padding: 2rem 2rem 3rem;
    }
    .actions {
      flex-direction: column;
    }
    button.action-btn {
      width: 100%;
      font-size: 1.1rem;
    }
  }
</style>
</head>
<body>
  <main class="container" role="main" aria-label="Panel de usuarios">

    <header>
      <h1>Usuarios</h1>
      <a href="{{ route('usuarios.buscarId') }}" class="btn-buscar" aria-label="Buscar usuario por ID">🔍 Buscar por ID</a>
      <a href="{{ url('posts/create') }}" class="btn-blog">
    Crear Blog </a>
    </header>


    @if(session('success'))
      <div class="success-message" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <section class="users-grid" aria-live="polite" aria-relevant="additions removals">
      @forelse($usuarios as $user)
        <article class="user-card" tabindex="0" aria-label="Usuario {{ $user->name }}">
          <h2 class="user-name">{{ $user->name }}</h2>
          <p class="user-email">{{ $user->email }}</p>
          <div class="actions">
            <form action="{{ route('users.edit', $user->id) }}" method="GET" aria-label="Editar usuario {{ $user->name }}">
              <button type="submit" class="action-btn edit-btn">Editar</button>
            </form>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este usuario?')" aria-label="Eliminar usuario {{ $user->name }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="action-btn delete-btn">Eliminar</button>
            </form>
          </div>
        </article>
      @empty
        <p class="no-users">No hay usuarios registrados.</p>
      @endforelse
    </section>

    <footer>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn" aria-label="Cerrar sesión">Cerrar sesión</button>
      </form>
      <a href="{{ url('/') }}" class="back-link" aria-label="Volver al inicio">← Volver al inicio</a>
    </footer>

  </main>
</body>
</html>
