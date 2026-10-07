# Hola Mundo con CodeIgniter 4

Proyecto básico creado con **Composer** (`codeigniter4/appstarter`) en una máquina virtual **Lubuntu**.

## Funcionalidad
- Ruta `/home` → controlador `Home::home`
- Vista `app/Views/home.php` renderizada con el motor de plantillas **View Renderer** (`service('renderer')`)

## Archivos principales
- `app/Controllers/Home.php`
- `app/Views/home.php`
- `app/Config/Routes.php`

## Cómo ejecutarlo
    composer install
    cp env .env
    php spark serve

Luego abrir `http://localhost:8080/home`

**Autor:** Jefferson Ibañez (JeffersonIB)
