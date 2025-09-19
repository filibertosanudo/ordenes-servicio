<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalación del Proyecto

Sigue estos pasos para instalar y ejecutar el sistema de órdenes de servicio:

1. **Clona el repositorio**
   ```sh
   git clone https://github.com/filibertosanudo/ordenes-servicio.git
   cd ordenes-servicio
   ```

2. **Instala dependencias**
   ```sh
   composer install
   npm install
   ```

3. **Configura el archivo de entorno**
   ```sh
   cp .env.example .env
   ```
   Edita `.env` con tus datos de base de datos y correo.

4. **Genera la clave de la aplicación**
   ```sh
   php artisan key:generate
   ```

5. **Ejecuta las migraciones y seeders**
   ```sh
   php artisan migrate --seed
   ```

6. **Compila los assets**
   ```sh
   npm run dev
   ```

7. **Inicia el servidor**
   ```sh
   php artisan serve
   ```

8. **Accede a la aplicación**
   Abre [http://localhost:8000](http://localhost:8000) en tu navegador.

---

Descripción del Proyecto

Este proyecto es un sistema de gestión de órdenes de servicio desarrollado en Laravel 12. Permite administrar clientes, servicios, órdenes y los detalles de cada orden, incluyendo:

1. Registro y edición de clientes.

2. Registro y edición de servicios con descripción y precio.

3. Creación, edición y visualización de órdenes de servicio.

4. Gestión de los detalles de cada orden, incluyendo cantidad, subtotal y total.

5. Soft delete para clientes, servicios y órdenes eliminados, con manejo seguro en las órdenes y detalles existentes.

6. Validaciones para asegurar que las órdenes siempre tengan al menos un servicio y un cliente válido.

---

Flujo de uso

1. Clientes

    - Accede a /clientes para gestionar clientes.

    - Puedes agregar, editar o eliminar clientes.

2. Servicios

    - Accede a /servicios para gestionar servicios disponibles.

    - Los servicios eliminados no rompen las órdenes existentes.

3. Órdenes

    - Accede a /ordenes para ver todas las órdenes.

    - Crear una orden requiere seleccionar un cliente y al menos un servicio.

    - Editar o eliminar órdenes actualiza automáticamente los detalles asociados.

4. Detalles de Orden

    - Accede a /detalles para ver los detalles de cada orden.

    - Cada card muestra máximo 2 servicios; se mantiene el tamaño uniforme aunque tenga menos servicios.

    - Funcionalidades de editar, eliminar y ver más permiten gestionar los detalles de la orden sin perder consistencia visual.
