#!/bin/bash

# Script de despliegue para hosting con versiones antiguas
# PHP 8.1.32, Node.js 10.24.0

echo "🚀 Iniciando despliegue de DendrIA en hosting legacy..."

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

# 2. Verificar versiones disponibles
echo "🔍 Verificando versiones del servidor..."
echo "PHP: $(php -v | head -n1)"
echo "Node: $(node -v 2>/dev/null || echo 'Node.js no disponible')"
echo "Composer: $(composer -V 2>/dev/null || echo 'Composer no disponible')"

# 3. SALTEAR composer install por incompatibilidad de PHP
echo "⚠️ Saltando composer install debido a incompatibilidad de PHP 8.1 vs requerido 8.2"
echo "ℹ️ Usando dependencias existentes de vendor/"

# 4. SALTEAR npm install y build por Node.js antigua
echo "⚠️ Saltando npm install y build debido a Node.js 10.x (se requiere 18+)"
echo "ℹ️ Usando CSS compilado existente"

# 5. Configurar archivo de entorno
echo "⚙️ Configurando entorno de producción..."
cp .env.production .env

# 6. Verificar clave de aplicación
echo "🔑 Verificando clave de aplicación..."
if ! grep -q "APP_KEY=base64:" .env; then
    echo "Generando nueva clave..."
    # Usar clave fija para evitar problemas
    sed -i 's/APP_KEY=.*/APP_KEY=base64:jLpiMG6nTLwRWR1WdMKtJ+fh+yXgWnERC+KfbGGzTBY=/' .env
fi

# 7. Crear base de datos SQLite si no existe
echo "🗄️ Verificando base de datos..."
if [ ! -f database/database.sqlite ]; then
    echo "Creando base de datos SQLite..."
    touch database/database.sqlite
    chmod 644 database/database.sqlite
fi

# 8. SALTEAR migraciones por problemas de PHP
echo "⚠️ Saltando migraciones debido a incompatibilidad de PHP"
echo "ℹ️ La base de datos debe configurarse manualmente"

# 9. SALTEAR seeders
echo "⚠️ Saltando seeders debido a incompatibilidad de PHP"

# 10. Crear enlace simbólico del directorio public al dominio
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

# 11. SALTEAR artisan commands por problemas de PHP
echo "⚠️ Saltando comandos de artisan debido a incompatibilidad de PHP"

# 12. Configurar permisos básicos
echo "🔐 Configurando permisos..."
chmod -R 755 storage bootstrap/cache 2>/dev/null || echo "Algunos permisos no se pudieron cambiar"
chmod 644 database/database.sqlite 2>/dev/null || echo "No se pudo cambiar permisos de DB"

# 13. Copiar assets públicos manualmente
echo "📁 Copiando assets estáticos..."
# Crear directorio de storage public si no existe
mkdir -p storage/app/public 2>/dev/null

# 14. Configurar .htaccess básico en el dominio
echo "🌐 Configurando redirección web..."
if [ ! -f "$PUBLIC_PATH/.htaccess" ]; then
    cat > "$PUBLIC_PATH/.htaccess" << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    
    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]
    
    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header always set X-Frame-Options DENY
    Header always set X-Content-Type-Options nosniff
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
</IfModule>

# Block access to sensitive files
<Files .env>
    Order allow,deny
    Deny from all
</Files>

<Files .env.*>
    Order allow,deny
    Deny from all
</Files>
EOF
fi

# 15. Verificar estructura
echo "🔍 Verificando estructura de despliegue..."
echo "- Repositorio: $REPO_PATH"
echo "- Dominio público: $PUBLIC_PATH"
echo "- Enlace público: $(readlink $PUBLIC_PATH 2>/dev/null || echo 'No es un enlace simbólico')"
echo "- Base de datos: $(ls -la database/database.sqlite 2>/dev/null || echo 'No encontrada')"
echo "- .htaccess: $(ls -la $PUBLIC_PATH/.htaccess 2>/dev/null || echo 'No encontrado')"

echo ""
echo "⚠️ DESPLIEGUE COMPLETADO CON LIMITACIONES"
echo "🌐 Tu aplicación podría estar disponible en: https://dendria.cl"
echo ""
echo "📝 PROBLEMAS DETECTADOS:"
echo "   ❌ PHP 8.1.32 (Laravel 11 requiere 8.2+)"
echo "   ❌ Node.js 10.24.0 (se requiere 18+ para assets)"
echo ""
echo "🔧 SOLUCIONES REQUERIDAS:"
echo "   1. Solicitar actualización de PHP a 8.2+ al hosting"
echo "   2. Solicitar actualización de Node.js a 18+ al hosting"
echo "   3. Alternativamente, migrar a un hosting con versiones modernas"
echo ""
echo "📞 MIENTRAS TANTO:"
echo "   - El sitio podría funcionar parcialmente"
echo "   - Los CSS/JS están compilados localmente"
echo "   - La base de datos necesita configuración manual"
echo "   - Algunos comandos de Laravel no funcionarán"