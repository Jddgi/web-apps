# Proyecto Web Apps - Actividad 10 (Landing Page & Protected Dashboard)

Este proyecto cumple con todos los requerimientos de la Actividad 10:
1. **Landing Page (`/`)**: Vista pública para visitantes no autenticados.
2. **Dashboard (`/dashboard`)**: Vista privada protegida accesible solo para usuarios autenticados.
3. **Barra de Navegación Dinámica**: Muestra opciones de `Login` y `Register` para invitados, y acceso al `Dashboard` y `Logout` para usuarios con sesión iniciada.
4. **Protección Middleware**: Middleware `auth` configurado en `DashboardController` para evitar acceso directo a no autenticados.

## Credenciales por Defecto (Seeder)
- **Correo:** `Juandd200511@gmail.com`
- **Contraseña:** `Batman2005+`

## Pasos para Desplegar

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
php artisan serve
```
