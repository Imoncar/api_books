# Proyecto API de Gestión de Libros y Usuarios

Este proyecto es una API desarrollada en Laravel para la gestión de usuarios y libros. Permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) tanto para usuarios como para libros, además de manejar relaciones entre tablas como autores, categorías y editoriales.

## Características Actuales

### Usuarios
- [x] Crear usuarios
- [x] Ver todos los usuarios
- [x] Ver un usuario individual
- [x] Eliminar usuarios(softdelete)
- [ ] Editar usuarios

### Libros (Futuro Desarrollo)
- [ ] Crear libros
- [ ] Ver todos los libros
- [ ] Ver un libro individual
- [ ] Actualizar libros
- [ ] Eliminar libros

### Autenticación
- [ ] Implementar autenticación de usuarios (por ejemplo, con Laravel Sanctum o Passport)

### Relaciones entre Tablas (Futuro Desarrollo)
- [ ] Relacionar libros con autores
- [ ] Relacionar libros con categorías
- [ ] Relacionar libros con editoriales

---

## Instalación

1. Clona este repositorio:
    ```bash
    git clone <[URL_DEL_REPOSITORIO](https://github.com/Imoncar/api_books)>
    cd <php_api_books>
2. Instala las dependencias de PHP:
    ```bash
    composer install
3. Configura el archivo .env: Copia el archivo de ejemplo
    ```bash
    cp .env.example .env
4. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
5. Ejecuta las migraciones:
    ```bash
    php artisan migrate
6. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve

---

## Endpoints Disponibles
### Usuarios
- POST /api/register - Crear un nuevo usuario.
- GET /api/users - Ver todos los usuarios.
- GET /api/users/{id} - Ver un usuario individual.
- DELETE /api/users/{id} - Eliminar un usuario.

---

### Libros (Futuro Desarrollo)
- POST /api/books - Crear un nuevo libro.
- GET /api/books - Ver todos los libros.
- GET /api/books/{id} - Ver un libro individual.
- PUT /api/books/{id} - Actualizar un libro.
- DELETE /api/books/{id} - Eliminar un libro.

---

## Tecnologías Utilizadas
- Framework: Laravel
- Base de Datos: MySQL
- Autenticación: Laravel Sanctum (planeado)
- Lenguaje: PHP
