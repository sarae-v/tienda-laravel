# Tienda Laravel con Docker

## Descripción

Proyecto desarrollado con Laravel y Docker para gestionar y visualizar una lista de productos. Incluye una base de datos MySQL y phpMyAdmin para administrar los datos.

## Tecnologías utilizadas

- PHP y Laravel
- MySQL 8
- Docker y Docker Compose
- phpMyAdmin
- Blade

## Funcionalidades

- Modelo `Producto`.
- Migración de la tabla `productos`.
- Seeder para cargar cinco productos de ejemplo.
- Controlador `ProductoController`.
- Vista web para mostrar los productos y sus precios en guaraníes.
- Administración de la base de datos mediante phpMyAdmin.

## Requisitos

- Docker instalado y funcionando.
- Docker Compose.
- Proyecto ubicado en la carpeta `tienda`, junto al archivo `compose.yaml` de este proyecto.

## Configuración

1. Clonar el repositorio.
2. Copiar `.env.example` a `.env`.
3. Configurar las variables de entorno para utilizar MySQL. Dentro de Docker, el host de la base de datos debe ser `db` y el puerto `3306`.
4. Desde la carpeta que contiene `compose.yaml`, ejecutar:

   ```bash
   docker compose up -d --build
   ```

5. Generar la clave de Laravel si fuera necesario:

   ```bash
   docker compose exec app php artisan key:generate
   ```

6. Ejecutar las migraciones y cargar los datos de ejemplo:

   ```bash
   docker compose exec app php artisan migrate --seed
   ```

## Acceso

- Aplicación: http://localhost:8080
- Lista de productos: http://localhost:8080/productos
- phpMyAdmin: http://localhost:8081

## Base de datos

- Base de datos: `laravel`
- Servidor dentro de Docker: `db`
- Usuario y contraseña: utilizar los valores configurados en el archivo `.env` local.

## Seguridad

El archivo `.env` contiene configuración local y no debe subirse al repositorio. Se incluye `.env.example` como referencia para configurar el entorno.

