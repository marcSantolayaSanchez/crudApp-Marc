<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<h1 align="center">🚀 crudApp-Marc</h1>

<p align="center">
  <b>Aplicación CRUD moderna desarrollada con Laravel, MySQL y TailwindCSS.</b><br>
  Proyecto creado para portafolio y futuras integraciones con React ⚛️.
</p>

<p align="center">
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-11.x-ff2d20?style=flat&logo=laravel&logoColor=white" alt="Laravel"></a>
  <a href="https://www.mysql.com/"><img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL"></a>
  <a href="https://tailwindcss.com/"><img src="https://img.shields.io/badge/TailwindCSS-Framework-38bdf8?style=flat&logo=tailwindcss&logoColor=white" alt="TailwindCSS"></a>
  <a href="#"><img src="https://img.shields.io/badge/React-(soon)-61dafb?style=flat&logo=react&logoColor=white" alt="React"></a>
</p>

---

## 📖 Descripción

**crudApp-Marc** es una aplicación CRUD (Create, Read, Update, Delete) desarrollada con el framework **Laravel**.  
Actualmente gestiona usuarios, pero está diseñada para ser escalable y adaptable a distintos tipos de entidades (productos, tareas, etc.).

Incluye una interfaz moderna gracias a **TailwindCSS**, y en futuras versiones incorporará **React** para ofrecer una experiencia aún más dinámica e interactiva.

---

## ⚙️ Tecnologías utilizadas

- ⚡ **Laravel** – Framework backend principal  
- 🗄️ **MySQL** – Base de datos relacional  
- 🎨 **TailwindCSS** – Framework CSS para un diseño limpio y moderno  
- ⚛️ **React (próximamente)** – Para una interfaz más interactiva y modular  

---

## ✨ Características principales

- 👤 Gestión completa de usuarios (crear, leer, actualizar, eliminar)
- 🔐 Validaciones y mensajes de error claros
- 🎨 Interfaz responsive con TailwindCSS
- 🧩 Estructura escalable para nuevas entidades CRUD
- 🪄 Preparado para integración con React
- 💾 Configuración sencilla y lista para usar

---

## 🧑‍💻 Instalación y configuración

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/crudApp-Marc.git

# Entrar al directorio
cd crudApp-Marc

# Instalar dependencias de PHP
composer install

# Crear el archivo de entorno
cp .env.example .env

# Generar la key de aplicación
php artisan key:generate

# Configurar conexión a base de datos en .env y luego ejecutar:
php artisan migrate

# Instalar dependencias de Tailwind (si aplica)
npm install && npm run dev

# Iniciar el servidor de desarrollo
php artisan serve
