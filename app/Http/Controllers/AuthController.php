<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\UserNotification;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
     public function me()
    {
        return response()->json(auth()->user());
    }                         

     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Sesión cerrada correctamente']);
    }
public function validateAccount($token)
{
    $user = User::where('remember_token', $token)->first();
    if (!$user) {
            return response()->json(['error' => 'Token inválido.'], 404);
        }

        $user->email_verified_at = now();
        $user->remember_token = null;
        $user->save();

        return response()->json(['message' => 'Cuenta activada correctamente']);
}
}
