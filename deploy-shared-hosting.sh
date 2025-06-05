#!/bin/bash

# Script de despliegue para hosting compartido
# Estructura: /home/n91a0e5/repositories/Dendria (código)
#            /home/n91a0e5/dendria.cl (dominio público)

echo "🚀 Iniciando despliegue de DendrIA en hosting compartido..."

# Variables de rutas
REPO_PATH="/home/n91a0e5/repositories/Dendria"
PUBLIC_PATH="/home/n91a0e5/dendria.cl"

# Verificar que estamos en el directorio correcto
if [ ! -f "artisan" ]; then
    echo "❌ Error: No se encuentra el archivo artisan. Asegúrate de estar en el directorio raíz del proyecto."
    exit 1
fi

# 1. Hacer pull de los últimos cambios
echo "📥 Descargando últimos cambios..."
git pull origin main

# 2. Instalar dependencias de PHP
echo "📦 Instalando dependencias de PHP..."
composer install --no-dev --optimize-autoloader

# 3. Instalar dependencias de Node.js si existe package.json
if [ -f "package.json" ]; then
    echo "📦 Instalando dependencias de Node.js..."
    npm install
    
    echo "🏗️ Compilando assets..."
    npm run build
fi

# 4. Configurar archivo de entorno
echo "⚙️ Configurando entorno de producción..."
cp .env.production .env

# 5. Generar clave de aplicación si no existe
echo "🔑 Verificando clave de aplicación..."
if ! grep -q "APP_KEY=base64:" .env; then
    php artisan key:generate --force
fi

# 6. Crear base de datos SQLite si no existe
echo "🗄️ Verificando base de datos..."
if [ ! -f database/database.sqlite ]; then
    echo "Creando base de datos SQLite..."
    touch database/database.sqlite
    chmod 644 database/database.sqlite
fi

# 7. Ejecutar migraciones
echo "🗂️ Ejecutando migraciones..."
php artisan migrate --force

# 8. Ejecutar seeders (opcional)
echo "🌱 Ejecutando seeders..."
php artisan db:seed --force

# 9. Crear enlace simbólico del directorio public al dominio
echo "🔗 Configurando enlace público..."

# Backup del directorio público si existe
if [ -d "$PUBLIC_PATH" ] && [ ! -L "$PUBLIC_PATH" ]; then
    echo "📋 Haciendo backup del directorio público existente..."
    mv "$PUBLIC_PATH" "${PUBLIC_PATH}_backup_$(date +%Y%m%d_%H%M%S)"
fi

# Remover enlace simbólico si existe
if [ -L "$PUBLIC_PATH" ]; then
    rm "$PUBLIC_PATH"
fi

# Crear enlace simbólico
ln -sf "$REPO_PATH/public" "$PUBLIC_PATH"

# 10. Configurar storage link
echo "📁 Configurando storage..."
php artisan storage:link

# 11. Limpiar y optimizar cache
echo "🧹 Limpiando y optimizando cache..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

# 12. Optimizar autoloader
echo "⚡ Optimizando autoloader..."
composer dump-autoload --optimize

# 13. Configurar permisos específicos para hosting compartido
echo "🔐 Configurando permisos..."
chmod -R 755 storage bootstrap/cache
chmod 644 database/database.sqlite

# Asegurar que el directorio storage sea accesible
find storage -type d -exec chmod 755 {} \;
find storage -type f -exec chmod 644 {} \;

# 14. Verificar estructura
echo "🔍 Verificando estructura de despliegue..."
echo "- Repositorio: $REPO_PATH"
echo "- Dominio público: $PUBLIC_PATH"
echo "- Enlace público: $(readlink $PUBLIC_PATH)"
echo "- Base de datos: $(ls -la database/database.sqlite)"

echo "✅ Despliegue completado exitosamente!"
echo "🌐 Tu aplicación está disponible en: https://dendria.cl"
echo ""
echo "📝 Notas importantes:"
echo "   - El código fuente está en: $REPO_PATH"
echo "   - El dominio apunta a: $PUBLIC_PATH (enlace simbólico)"
echo "   - La base de datos SQLite está en: $REPO_PATH/database/database.sqlite"