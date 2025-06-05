# 🚀 Guía de Despliegue - DendrIA

Esta guía te ayudará a desplegar DendrIA en tu servidor manteniendo la base de datos SQLite.

## 📋 Prerrequisitos

- PHP 8.1 o superior
- Composer
- Node.js y npm
- Git
- Servidor web (Apache/Nginx)

## 🔧 Configuración del Servidor

### 1. Clonar el Repositorio

```bash
git clone [URL_DE_TU_REPOSITORIO] dendria
cd dendria
```

### 2. Configurar Permisos

```bash
chmod -R 755 storage bootstrap/cache
chmod +x deploy.sh
```

### 3. Configurar Variables de Entorno

Edita el archivo `.env.production` y ajusta:

```env
APP_URL=https://tu-dominio.com
DB_DATABASE=/ruta/completa/al/proyecto/database/database.sqlite
MAIL_HOST=tu-servidor-smtp
MAIL_USERNAME=tu-email
MAIL_PASSWORD=tu-password
```

### 4. Ejecutar Despliegue Inicial

```bash
./deploy.sh
```

## 🔄 Despliegues Posteriores

Para actualizaciones futuras, simplemente ejecuta:

```bash
./deploy.sh
```

Este script se encargará de:
- ✅ Descargar cambios de Git
- ✅ Instalar dependencias
- ✅ Compilar assets
- ✅ Ejecutar migraciones
- ✅ Limpiar y optimizar cache

## 🗄️ Base de Datos SQLite

### Ubicación
La base de datos se encuentra en: `database/database.sqlite`

### Backup
```bash
# Crear backup
cp database/database.sqlite database/backup_$(date +%Y%m%d_%H%M%S).sqlite

# Restaurar backup
cp database/backup_YYYYMMDD_HHMMSS.sqlite database/database.sqlite
```

### Migrar desde MySQL (si fuera necesario)
```bash
# Exportar datos desde MySQL
php artisan db:seed --class=DatabaseSeeder

# O importar datos específicos si ya tienes un dump
```

## 🌐 Configuración del Servidor Web

### Apache (.htaccess)
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

### Nginx
```nginx
server {
    listen 80;
    server_name tu-dominio.com;
    root /ruta/al/proyecto/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

## 🔐 Seguridad

### Permisos Recomendados
```bash
# Directorios
find . -type d -exec chmod 755 {} \;

# Archivos PHP
find . -name "*.php" -exec chmod 644 {} \;

# Storage y cache
chmod -R 775 storage bootstrap/cache

# Base de datos
chmod 644 database/database.sqlite
```

### Variables de Entorno Sensibles
- Nunca subas el archivo `.env` al repositorio
- Usa `.env.production` como template
- Genera una nueva `APP_KEY` en producción

## 🐛 Troubleshooting

### Error de Permisos
```bash
sudo chown -R www-data:www-data storage bootstrap/cache
```

### Error de SQLite
```bash
# Verificar que el archivo existe
ls -la database/database.sqlite

# Verificar permisos
chmod 644 database/database.sqlite
```

### Cache Issues
```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

## 📞 Soporte

Si encuentras problemas durante el despliegue:

1. Revisa los logs: `storage/logs/laravel.log`
2. Verifica la configuración del servidor web
3. Comprueba los permisos de archivos y directorios
4. Asegúrate de que SQLite esté disponible: `php -m | grep sqlite`

## 🔄 Workflow de Git

### Desarrollo
```bash
git checkout -b nueva-feature
# Hacer cambios
git add .
git commit -m "feat: nueva funcionalidad"
git push origin nueva-feature
```

### Producción
```bash
git checkout main
git merge nueva-feature
git push origin main
# En servidor: ./deploy.sh
```