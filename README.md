# 🏨 API de Reservas de Hotel

API desarrollada en **PHP** para la gestión básica de un **hotel**, creada en colaboración por **Carlos** e **Ismael** como proyecto práctico de backend.

El proyecto simula un sistema real de **reservas**, conectando una API sencilla con una base de datos y una interfaz básica.

---

## 🚀 Funcionalidades

* 🏨 Gestión de reservas de hotel
* 📅 Creación de nuevas reservas
* 🔍 Consulta de disponibilidad
* 🗄️ Conexión con base de datos SQL
* 🌐 API preparada para ser consumida desde frontend

---

## 🧠 Tecnologías utilizadas

* **PHP** (API backend)
* **MySQL / SQL** (base de datos)
* **HTML & CSS** (interfaz básica)
* **Fetch / HTTP Requests** (consumo de la API)

---

## 📁 Estructura del proyecto

```bash
/
├── api/              # Endpoints de la API
├── css/              # Estilos del frontend
├── database.sql      # Script de creación de la base de datos
├── index.php         # Página principal
├── reservar.php      # Lógica de reservas
├── README.md         # Documentación
```

---

## 🔌 Endpoints de la API

> 📌 Los endpoints se encuentran dentro de la carpeta `api/`

Ejemplo de operaciones que puede manejar la API:

* `GET /api/...` → Obtener información
* `POST /api/...` → Crear una reserva

*(Los endpoints pueden ampliarse según las necesidades del proyecto)*

---

## 🗄️ Base de datos

El archivo `database.sql` contiene:

* Creación de tablas
* Estructura necesaria para gestionar reservas

### 🛠️ Instalación de la base de datos

1. Crear una base de datos en MySQL
2. Importar el archivo:

```sql
source database.sql;
```

---

## ▶️ Cómo ejecutar el proyecto

1. Tener instalado **PHP** y **MySQL**
2. Usar un servidor local (XAMPP, WAMP, Laragon…)
3. Colocar el proyecto en `htdocs`
4. Importar la base de datos
5. Acceder desde el navegador:

```text
http://localhost/nombre-del-proyecto
```

---

## 🎯 Objetivo del proyecto

Este proyecto tiene un enfoque **educativo**, ideal para:

* Practicar creación de APIs en PHP
* Entender la comunicación frontend ↔ backend
* Trabajar con bases de datos
* Aprender trabajo en equipo y control de versiones

---

## ✨ Posibles mejoras

* Autenticación de usuarios
* Validaciones avanzadas
* Respuestas en formato JSON estandarizado
* Control de errores HTTP
* Documentación con Swagger

---

## 🤝 Autores

* **Ismael Amador Serrano**
* **Carlos**

Proyecto desarrollado como práctica de backend 🚀

---

⭐ Si te gusta el proyecto o te resulta útil, ¡no olvides dejar una estrella!
