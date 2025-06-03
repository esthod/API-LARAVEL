<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirma tu cuenta</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');
  </style>
</head>
<body style="margin: 0; padding: 0; font-family: 'Quicksand', sans-serif; background: #fff0f6;">
  <div style="max-width: 640px; margin: 40px auto; background-color: #ffffff; border-radius: 16px; box-shadow: 0 8px 30px rgba(240, 143, 166, 0.15); overflow: hidden; border: 1px solid #fdd6e7;">
    
    <div style="background: linear-gradient(to right, #f48fb1, #d291bc); color: white; padding: 30px; text-align: center;">
      <h1 style="margin: 0; font-size: 1.9rem;">¡Hola, {{ $user->name }}! 🌸</h1>
      <p style="margin-top: 8px; font-size: 1.1rem;">Gracias por unirte a <strong>{{ config('app.name') }}</strong></p>
    </div>
    
    <div style="padding: 30px 25px; color: #5b4a57; font-size: 1.05rem; line-height: 1.6;">
      <p>Estamos muy felices de tenerte aquí. Solo falta un paso para activar tu cuenta y comenzar a disfrutar de todas nuestras funciones.</p>
      <p style="text-align: center; margin-top: 2rem;">
        <a href="{{ url('/users/active/account/'.$token) }}" 
           style="display: inline-block; padding: 14px 28px; background-color: #f48fb1; color: white; border-radius: 30px; font-weight: bold; text-decoration: none; font-size: 1.05rem; transition: background 0.3s;">
          Confirmar mi cuenta
        </a>
      </p>
      <p style="margin-top: 2rem; text-align: center; font-size: 0.95rem; color: #aa6a87;">
        Este enlace expira en 24 horas. ¡No lo dejes pasar!
      </p>
    </div>
    
    <div style="background-color: #fdf3f8; text-align: center; padding: 20px; font-size: 0.9rem; color: #a26c8a;">
      <p style="margin-bottom: 6px;">¿No fuiste tú quien solicitó este registro?</p>
      <p style="margin: 0;">Ignora este mensaje. No se realizará ningún cambio.</p>
      <p style="margin-top: 1rem;">&copy; {{ date('Y') }} {{ config('app.name') }} — Todos los derechos reservados</p>
    </div>

  </div>
</body>
</html>
