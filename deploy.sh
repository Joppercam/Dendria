#!/bin/bash

# Script de despliegue para DendrIA
# Configurar las variables según tu hosting

echo "🚀 Iniciando despliegue de DendrIA..."

# 1. Hacer pull de los últimos cambios
echo "📥 Descargando últimos cambios..."
git pull origin main

# 2. Instalar dependencias de PHP
echo "📦 Instalando dependencias de PHP..."
composer install --no-dev --optimize-autoloader

# 3. Instalar dependencias de Node.js
echo "📦 Instalando dependencias de Node.js..."
npm install

# 4. Compilar assets
echo "🏗️ Compilando assets..."
npm run build

# 5. Configurar archivo de entorno
echo "⚙️ Configurando entorno de producción..."
cp .env.production .env

# 6. Generar clave de aplicación si no existe
echo "🔑 Generando clave de aplicación..."
php artisan key:generate --force

# 7. Crear base de datos SQLite si no existe
echo "🗄️ Verificando base de datos..."
if [ ! -f database/database.sqlite ]; then
    echo "Creando base de datos SQLite..."
    touch database/database.sqlite
fi

# 8. Ejecutar migraciones
echo "🗂️ Ejecutando migraciones..."
php artisan migrate --force

# 9. Ejecutar seeders (opcional, comentar si no quieres datos de prueba)
echo "🌱 Ejecutando seeders..."
php artisan db:seed --force

# 10. Limpiar y optimizar cache
echo "🧹 Limpiando y optimizando cache..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# 11. Optimizar autoloader
echo "⚡ Optimizando autoloader..."
composer dump-autoload --optimize

# 12. Configurar permisos
echo "🔐 Configurando permisos..."
chmod -R 755 storage bootstrap/cache
chmod 644 database/database.sqlite

# 13. Crear enlace simbólico para storage (si no existe)
echo "🔗 Configurando storage..."
php artisan storage:link

echo "✅ Despliegue completado exitosamente!"
echo "🌐 Tu aplicación está lista en: $(php artisan route:list | grep 'GET' | head -1 | awk '{print $4}' || echo 'tu-dominio.com')"