# 🛍️ SESANUS – Tienda Online de Suplementos

## 📖 Descripción del proyecto

**Sesanus** es una tienda online desarrollada con **Laravel**, orientada a la venta de productos relacionados con el bienestar, la salud y la suplementación deportiva.

El proyecto simula el funcionamiento básico de un e-commerce real y ha sido desarrollado con fines académicos, prestando atención tanto a la funcionalidad como al diseño y a la experiencia de usuario.

---

## ⚙️ Funcionalidades implementadas

- Página de inicio con productos destacados.
- Listado de productos con buscador, filtros por categoría y ordenación.
- Sistema de categorías para organizar los productos.
- Sistema de ofertas con descuentos porcentuales y precios finales.
- Página de detalle de producto.
- Carrito de compra gestionado por sesión:
  - Añadir, modificar y eliminar productos.
  - Cálculo automático del total.
- Lista de deseos:
  - Los usuarios autenticados pueden guardar productos en su lista personal de deseos.
- Gestión de stock:
  - No se permite añadir productos sin stock.
  - No se pueden superar las cantidades disponibles.
  - Prevención de stock negativo.
- Sistema de autenticación de usuarios.
- Sistema de roles:
  - **Administrador**: acceso al panel de administración y gestión de productos.
  - **Usuario estándar**: navegación por la tienda y uso del carrito.
- Seguridad y control de acceso:
  - Protección de rutas mediante middleware.
  - Acceso restringido a zonas administrativas.
  - Elementos de administración visibles solo para administradores.
- Persistencia de estado:
  - El carrito, la lista de deseos y los filtros se mantienen durante la sesión del usuario.
- Diseño responsive y experiencia de usuario cuidada.
- Buenas prácticas:
  - Uso de componentes Blade reutilizables.
  - Separación entre lógica, vistas y estilos.

---

## 🛠️ Tecnologías utilizadas

- **Laravel**
- **PHP 8**
- **MySQL**
- **Blade**
- **Tailwind CSS**
- **Vite / NPM**
- **Docker**
- **Git y GitHub**

---

## 🚀 Instalación y despliegue

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/lillo10-mz/MyShop.git
cd MyShop
```

### 2️⃣ Crear el archivo de entorno
```bash
cp .env.example .env
```

### 3️⃣ Configurar la base de datos
Editar el archivo .env y dejar la base de datos así:
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=myshop
DB_USERNAME=sail
DB_PASSWORD=password

```

### 4️⃣ Instalar dependencias backend con Docker
```bash
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php83-composer:latest \
  composer install
```

### 5️⃣ Levantar el entorno con Laravel Sail
```bash
./vendor/bin/sail up -d
```

### 6️⃣ Generar clave de la aplicación
```bash
./vendor/bin/sail artisan key:generate
```

### 7️⃣ Ejecutar migraciones
```bash
./vendor/bin/sail artisan migrate
```

### 8️⃣ Instalar dependencias frontend y compilar assets
```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### Acceder desde el navegador a:
```
http://localhost
```

---

## 👤 Usuarios de prueba y roles

### 🔑 Administrador
- Acceso al panel de administración.
- Gestión de productos y ofertas.

**Credenciales de ejemplo:**
- Email: `admin@admin.com`
- Contraseña: `Admin12345`

### 👥 Usuario estándar
- Navegación por la tienda.
- Añadir productos al carrito y realizar pedidos.

**Credenciales de ejemplo:**
- Email: `miguel@email.com`
- Contraseña: `password123`

- Email: `pepe@email.com`
- Contraseña: `pepepepe1`


---

## 👨‍🎓 Autor

Proyecto realizado por: Miguel Zamora Ruiz  
Asignatura: Desarrollo WEB en Entorno Servidor 
Curso: 2ºDAW

---

## 📄 Licencia

    Este proyecto está licenciado bajo Creative Commons BY-NC 4.0.
    Esto significa que:
     - Se permite usar y compartir el proyecto
     - Se debe mencionar la autoría
     - No está permitido el uso comercial
    Más información:
    https://creativecommons.org/licenses/by-nc/4.0/
