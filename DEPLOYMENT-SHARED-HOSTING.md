# 🚀 Guía de Despliegue - DendrIA (Hosting Compartido)

Esta guía específica es para desplegar DendrIA en un hosting compartido con la estructura:
- **Repositorio**: `/home/n91a0e5/repositories/Dendria`
- **Dominio**: `/home/n91a0e5/dendria.cl`

## 📋 Estructura del Hosting Compartido

```
/home/n91a0e5/
├── repositories/
│   └── Dendria/           # Código fuente del proyecto
│       ├── app/
│       ├── database/
│       ├── public/        # Assets y index.php
│       └── ...
└── dendria.cl/            # Dominio (enlace simbólico a repositories/Dendria/public)
```

## 🔧 Paso a Paso para Desplegar

### 1. Conectar por SSH al hosting

```bash
ssh n91a0e5@tu-hosting.com
```

### 2. Navegar al directorio de repositorios

```bash
cd /home/n91a0e5/repositories
```

### 3. Clonar el repositorio

```bash
git clone https://github.com/Joppercam/Dendria.git
cd Dendria
```

### 4. Ejecutar el script de despliegue

```bash
chmod +x deploy-shared-hosting.sh
./deploy-shared-hosting.sh
```

## ⚙️ Configuración Manual (si es necesario)

### Si el script automático no funciona, puedes hacer esto manualmente:

#### 1. Configurar variables de entorno
```bash
cp .env.production .env
nano .env
```

#### 2. Instalar dependencias
```bash
composer install --no-dev --optimize-autoloader
```

#### 3. Configurar base de datos
```bash
touch database/database.sqlite
chmod 644 database/database.sqlite
php artisan migrate --force
php artisan db:seed --force
```

#### 4. Crear enlace simbólico
```bash
# Backup del directorio actual si existe
mv /home/n91a0e5/dendria.cl /home/n91a0e5/dendria.cl.backup

# Crear enlace simbólico
ln -sf /home/n91a0e5/repositories/Dendria/public /home/n91a0e5/dendria.cl
```

#### 5. Configurar permisos
```bash
chmod -R 755 storage bootstrap/cache
chmod 644 database/database.sqlite
```

#### 6. Optimizar para producción
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer dump-autoload --optimize
```

## 🔧 Configuración Adicional

### Si el enlace simbólico no funciona

Algunos hostings no permiten enlaces simbólicos. En ese caso:

1. **Copia el .htaccess especial**:
```bash
cp .htaccess-domain /home/n91a0e5/dendria.cl/.htaccess
```

2. **O mueve todo el contenido público**:
```bash
rm -rf /home/n91a0e5/dendria.cl/*
cp -r public/* /home/n91a0e5/dendria.cl/
```

3. **Ajusta las rutas en index.php**:
```php
// En /home/n91a0e5/dendria.cl/index.php
require_once '/home/n91a0e5/repositories/Dendria/vendor/autoload.php';
$app = require_once '/home/n91a0e5/repositories/Dendria/bootstrap/app.php';
```

## 🔄 Actualizaciones Futuras

Para actualizar el sitio:

```bash
cd /home/n91a0e5/repositories/Dendria
./deploy-shared-hosting.sh
```

## 🗄️ Base de Datos

### Ubicación
```
/home/n91a0e5/repositories/Dendria/database/database.sqlite
```

### Backup
```bash
cp database/database.sqlite database/backup_$(date +%Y%m%d_%H%M%S).sqlite
```

### Restaurar
```bash
cp database/backup_YYYYMMDD_HHMMSS.sqlite database/database.sqlite
```

## 🔐 Configuración de Variables de Entorno

Edita el archivo `.env` con tus datos específicos:

```env
APP_URL=https://dendria.cl
DB_DATABASE=/home/n91a0e5/repositories/Dendria/database/database.sqlite

# Configuración de correo
MAIL_HOST=smtp.tu-hosting.com
MAIL_USERNAME=noreply@dendria.cl
MAIL_PASSWORD=tu-password-de-correo
```

## 🐛 Troubleshooting

### Error 500
```bash
# Verificar logs
tail -f storage/logs/laravel.log

# Limpiar cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Problemas de permisos
```bash
chmod -R 755 storage bootstrap/cache
chmod 644 database/database.sqlite
```

### Assets no cargan
```bash
# Verificar enlace simbólico
ls -la /home/n91a0e5/dendria.cl

# Si no funciona, usar .htaccess alternativo
cp .htaccess-domain /home/n91a0e5/dendria.cl/.htaccess
```

### Base de datos no accesible
```bash
# Verificar que el archivo existe
ls -la database/database.sqlite

# Verificar permisos
chmod 644 database/database.sqlite

# Verificar ruta en .env
grep DB_DATABASE .env
```

## 📞 Checklist Final

- ✅ Repositorio clonado en `/home/n91a0e5/repositories/Dendria`
- ✅ Enlace simbólico creado de `dendria.cl` → `repositories/Dendria/public`
- ✅ Base de datos SQLite creada y migrada
- ✅ Permisos configurados correctamente
- ✅ Variables de entorno ajustadas
- ✅ Cache optimizado para producción
- ✅ Sitio accesible en https://dendria.cl

## 🔄 Workflow de Desarrollo

### Para hacer cambios:

1. **En local**: Hacer cambios y commit
```bash
git add .
git commit -m "descripción del cambio"
git push origin main
```

2. **En servidor**: Actualizar
```bash
cd /home/n91a0e5/repositories/Dendria
./deploy-shared-hosting.sh
```

¡Tu sitio estará listo en https://dendria.cl! 🎉