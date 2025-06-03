<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>🌸 Usuarios del Blog 🌸</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff0f5;
            margin: 0;
            padding: 20px;
            color: #5a004f;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.2);
        }

        h1 {
            text-align: center;
            color: #d63384;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #f2c9d6;
            text-align: left;
        }

        th {
            background-color: #f8c1d8;
            color: #6b004f;
        }

        tr:hover {
            background-color: #ffe6f0;
        }

        .btn {
            padding: 8px 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .edit-btn {
            background-color: #ff69b4;
            color: white;
        }

        .edit-btn:hover {
            background-color: #e0559f;
        }

        .delete-btn {
            background-color: #ffb6c1;
            color: #6a004f;
        }

        .delete-btn:hover {
            background-color: #ff8ca1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👩‍💻 Lista de Publicaciones del Blog</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Nombre del Autor</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
             <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</  td>
                        <td>{{ $blog->user->name}}</td>
                        <td>
                            <a href="/posts/eliminar/{{$blog->id}}" class="btn delete-btn" onsubmit="return confirm('¿Estás segura de eliminar este blog?');"> Eliminar</a>
                        </td>
                        <td>
                            <a href="/posts/{{$blog->id}}/edit" class="btn edit-btn"> Editar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
        <a href="/posts/create" class="btn edit-btn" style="display: block; text-align: center; margin-top: 20px;">Crear Nuevo Blog</a>

    </div>
</body>
</html>
