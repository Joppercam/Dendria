# 🚨 Despliegue en Hosting Legacy - DendrIA

## ⚠️ Problemas Detectados

Tu hosting tiene versiones incompatibles:
- **PHP 8.1.32** (Laravel 11 requiere PHP 8.2+)
- **Node.js 10.24.0** (Se requiere Node.js 18+ para assets)

## 🔧 Soluciones Inmediatas

### Opción 1: Despliegue con Limitaciones (Recomendado a corto plazo)

```bash
# En tu servidor, usa el script legacy:
./deploy-legacy-hosting.sh
```

Este script:
- ✅ Salta composer install (incompatible)
- ✅ Salta npm build (incompatible) 
- ✅ Usa assets pre-compilados
- ✅ Configura enlaces simbólicos
- ✅ Establece permisos básicos
- ⚠️ Requiere configuración manual de DB

### Opción 2: Configuración Manual Completa

#### 1. Configurar Variables de Entorno
```bash
cp .env.legacy .env
nano .env  # Ajustar configuraciones si es necesario
```

#### 2. Reemplazar index.php
```bash
cp index-legacy.php public/index.php
```

#### 3. Configurar Base de Datos Manualmente
```bash
# Crear archivo de base de datos
touch database/database.sqlite
chmod 644 database/database.sqlite

# Crear tablas básicas manualmente o usar backup
```

#### 4. Configurar Enlace Público
```bash
# Backup si existe
mv /home/n91a0e5/dendria.cl /home/n91a0e5/dendria.cl.backup

# Crear enlace simbólico
ln -sf /home/n91a0e5/repositories/Dendria/public /home/n91a0e5/dendria.cl
```

## 🔴 Limitaciones Actuales

### No Funcionarán:
- ❌ Comandos de Artisan
- ❌ Migraciones automáticas
- ❌ Seeders
- ❌ Cache optimizado
- ❌ Compilación de assets

### Sí Funcionarán:
- ✅ Sitio web básico
- ✅ Rutas estáticas
- ✅ Assets pre-compilados
- ✅ Archivos CSS/JS existentes

## 🏆 Soluciones Definitivas

### Opción A: Actualizar Hosting (Recomendado)

Solicita a tu proveedor de hosting:

```
Estimados,

Necesito actualizar las siguientes versiones en mi cuenta:
- PHP: de 8.1.32 a 8.2+ (idealmente 8.3)
- Node.js: de 10.24.0 a 18+ (idealmente 20 LTS)

Esto es requerido para una aplicación Laravel 11.

Gracias.
```

### Opción B: Migrar a Hosting Moderno

Hostings recomendados con versiones compatibles:
- **DigitalOcean App Platform**
- **AWS Lightsail**
- **Vercel** (para proyectos estáticos)
- **Railway**
- **Hostinger VPS**

### Opción C: Downgrade a Laravel 10 (No Recomendado)

Si no puedes cambiar de hosting, podríamos downgrade a Laravel 10 que soporta PHP 8.1, pero perderías features nuevas.

## 🔧 Script de Emergencia

Si el sitio no carga, ejecuta esto:

```bash
cd /home/n91a0e5/repositories/Dendria

# Verificar estructura
ls -la public/
ls -la database/

# Verificar enlace
ls -la /home/n91a0e5/dendria.cl

# Reconfigurar si es necesario
rm /home/n91a0e5/dendria.cl
ln -sf /home/n91a0e5/repositories/Dendria/public /home/n91a0e5/dendria.cl

# Verificar permisos
chmod 644 database/database.sqlite
chmod -R 755 storage bootstrap/cache
```

## 📊 Estado Actual

Después de ejecutar el script legacy:

```
✅ Código fuente: /home/n91a0e5/repositories/Dendria
✅ Enlace público: /home/n91a0e5/dendria.cl → repositories/Dendria/public
✅ Base de datos: database/database.sqlite (vacía)
✅ Assets: CSS/JS pre-compilados
⚠️ Laravel: Funcionalidad limitada por PHP 8.1
⚠️ Base de datos: Requiere configuración manual
```

## 📞 Próximos Pasos

1. **Inmediato**: Ejecutar `./deploy-legacy-hosting.sh`
2. **Corto plazo**: Solicitar actualización de PHP y Node.js
3. **Medio plazo**: Migrar a hosting moderno si no hay respuesta
4. **Configurar**: Base de datos manualmente una vez funcione

## 🆘 Si Necesitas Ayuda

El sitio debería cargar con funcionalidad básica en https://dendria.cl

Si no carga:
1. Verificar que el enlace simbólico existe
2. Verificar permisos de archivos
3. Revisar logs del servidor web
4. Contactar soporte del hosting

¿Qué opción prefieres seguir?