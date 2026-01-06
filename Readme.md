Hotel REST API - Proyecto DAW

Sistema de gestión de reservas mediante API RESTful protegida por API Key.

##Requisitos
 Instalación
=================
1. Clonar el repositorio.
2. Importar el archivo `database.sql` en tu servidor MySQL.
3. Configurar la conexión PDO en los archivos de la carpeta `/api`.

## 🔒 Seguridad
La API requiere una cabecera `Authorization: Bearer HOTEL_API_123` para realizar modificaciones (POST, PUT, DELETE).

## 🛠️ Endpoints
- `GET /api/habitaciones.php` - Listar todas las habitaciones.
- `GET /api/reservas.php` - Ver todas las reservas.
- `POST /api/reservas.php` - Crear reserva.
- `PUT /api/reservas.php` - Editar reserva.
- `DELETE /api/reservas.php?id={id}` - Borrar reserva.