# Resort

Proyecto de práctica con Laravel que protege las zonas del Resort según el inicio de sesión, el rol y la edad del usuario.

## Requisitos

- PHP y Composer
- Node.js y npm
- Laravel Herd

## Cuentas de prueba

Las tres cuentas usan la contraseña `password`.

| Cuenta | Acceso |
|---|---|
| `admin@resort.test` | Panel, casino y administración |
| `cliente@resort.test` | Panel y casino |
| `menor@resort.test` | Panel; el casino deniega el acceso |

## Rutas

- `/` — inicio público
- `/login` — inicio de sesión
- `/register` — pantalla ficticia de registro
- `/panel` — requiere iniciar sesión
- `/casino` — requiere iniciar sesión y tener 18 años o más
- `/admin` — requiere iniciar sesión y ser administrador

## Tecnologías

- Laravel
- Blade
- Vite
- Tailwind CSS
