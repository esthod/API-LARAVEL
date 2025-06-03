<?php
namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    /**
     * Mostrar todos los usuarios.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Registrar un nuevo usuario.
     */
    public function store(Request $request)
    {
        $rememberToken = bin2hex(random_bytes(10)); 
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = $rememberToken;
        $user->save();

        $user->notify(new UserNotification());

        return response()->json([
            'message' => 'Usuario creado con éxito',
            'usuario' => $user
        ], 201);
    }

    /**
     * Mostrar un usuario específico (API/JSON).
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function edit(string $id)
{
    $user = User::findOrFail($id);
    return view('usuarios.edit', compact('user'));
}

    /**
     * Actualizar un usuario.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return response()->json([
            'message' => 'Usuario actualizado con éxito',
            'usuario' => $user
        ]);
    }

    /**
     * Eliminar un usuario.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Usuario eliminado con éxito'
        ]);
    }
}
