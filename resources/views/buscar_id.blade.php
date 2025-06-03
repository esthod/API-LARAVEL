<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Buscar Usuario por ID</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9d5e5, #fbc1cc);
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .buscar-container {
            background: #fff0f6;
            padding: 2.5rem 3rem;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(243, 172, 185, 0.5);
            width: 100%;
            max-width: 420px;
            border: 2px solid #f7a1b9;
            transition: box-shadow 0.3s ease;
        }
        .buscar-container:hover {
            box-shadow: 0 16px 40px rgba(243, 172, 185, 0.8);
        }
        h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: #d6336c;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px #f7a1b9;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #b6335a;
            font-weight: 600;
            font-size: 0.95rem;
        }
        input {
            width: 100%;
            padding: 0.85rem 1rem;
            margin-bottom: 1.4rem;
            border: 2px solid #f7a1b9;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 500;
            color: #6a4050;
            background: #fff5f9;
            transition: border-color 0.3s ease;
        }
        input:focus {
            outline: none;
            border-color: #d6336c;
            background: #ffe6f0;
            box-shadow: 0 0 8px #f7a1b9aa;
        }
        button {
            width: 100%;
            background-color: #d6336c;
            color: white;
            border: none;
            padding: 0.9rem;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 14px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(214, 51, 108, 0.6);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        button:hover {
            background-color: #b02a59;
            box-shadow: 0 6px 18px rgba(176, 42, 89, 0.8);
        }
        .result {
            margin-top: 1.5rem;
            padding: 1rem 1.2rem;
            background: #ffe6f0;
            border-radius: 12px;
            color: #6a4050;
            font-weight: 600;
            box-shadow: inset 0 0 8px #f7a1b9aa;
        }
        .result.error {
            color: #ef4444;
            background: #fce4e4;
            box-shadow: inset 0 0 8px #f48fb1;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #d6336c;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .back-link:hover {
            color: #b02a59;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="buscar-container">
        <h2>Buscar Usuario por ID</h2>
        <form action="{{ route('usuarios.buscarId') }}" method="GET">
            <label for="id">ID de Usuario</label>
            <input type="number" id="id" name="id" required />
            <button type="submit">Buscar</button>
        </form>

        @if(isset($usuario))
            @if($usuario)
                <div class="result">
                    <strong>Nombre:</strong> {{ $usuario->name }}<br />
                    <strong>Correo:</strong> {{ $usuario->email }}
                </div>
            @else
                <div class="result error">
                    Usuario no encontrado.
                </div>
            @endif
        @endif

        <a href="{{ url('/usuarios') }}" class="back-link">← Volver a la lista</a>
    </div>
</body>
</html>
