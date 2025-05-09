@extends('layouts.app')

@section('title', 'Casos de Éxito - Proyectos de Desarrollo de Software')

@section('hero')
<!-- Hero Section -->
<div class="container mx-auto px-6 py-16">
    <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Casos de Éxito</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Proyectos transformadores que han ayudado a nuestros clientes a crecer y destacarse en su industria.
        </p>
    </div>
</div>
@endsection

@section('content')
<!-- Caso de Éxito Principal: ConocIA -->
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl">
            <div class="md:flex">
                <!-- Imagen del Proyecto - Visualización Dinámica -->
                <div class="md:w-1/2 h-80 md:h-auto relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900"></div>
                    
                    <!-- Fondo dinámico con animación temática de ConocIA -->
                    <div class="conocia-network-animation absolute inset-0">
                        <!-- La animación se generará con JS -->
                    </div>
                    
                    <!-- Logo superpuesto con efecto de iluminación -->
                    <div class="absolute inset-0 flex items-center justify-center z-10">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-500 opacity-20 blur-3xl rounded-full animate-pulse"></div>
                            <img 
                                src="{{ asset('images/conocia-case-study.jpg') }}" 
                                alt="ConocIA Portal" 
                                class="h-32 relative z-10 floating"
                                onerror="this.onerror=null; this.src='https://www.conocia.cl/wp-content/uploads/2023/03/logo.png';"
                            >
                        </div>
                    </div>
                </div>
                
                <!-- Información del Proyecto -->
                <div class="md:w-1/2 p-8 md:p-10">
                    <div class="mb-6">
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 last:mr-0 mr-1">
                            Portal de Noticias
                        </span>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900 last:mr-0 mr-1">
                            Inteligencia Artificial
                        </span>
                    </div>
                    <h2 class="text-3xl font-bold mb-4">ConocIA</h2>
                    <p class="text-gray-300 mb-6">
                        Portal especializado en noticias, investigaciones y análisis sobre inteligencia artificial, tecnología e innovación.
                    </p>
                    <a href="https://www.conocia.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition mr-4">
                        Visitar sitio
                    </a>
                    <a href="#conocia-details" class="inline-block text-blue-400 hover:text-blue-300 font-bold py-2 transition">
                        Ver detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detalles del Caso ConocIA -->
<section id="conocia-details" class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold mb-4">ConocIA - Portal de Noticias de IA</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Una plataforma completa de contenido especializado en inteligencia artificial
            </p>
        </div>
        
        <!-- Desafío y Solución -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-blue-900 flex items-center justify-center mr-4">
                        <i class="fas fa-mountain text-blue-400"></i>
                    </div>
                    El Desafío
                </h3>
                <div class="space-y-4 text-gray-300">
                    <p>
                        El cliente necesitaba una plataforma especializada para difundir contenido de alta calidad sobre inteligencia artificial, capaz de presentar diversos formatos (texto, audio, video) y ofrecer una experiencia única a los lectores.
                    </p>
                    <p>
                        El desafío principal era crear un portal de noticias con alto rendimiento que integrara tecnologías de IA no solo como tema, sino como parte de la generación de contenido, especialmente para la producción de podcasts diarios.
                    </p>
                    <p>
                        Adicionalmente, se requería un sistema de categorización inteligente y un diseño que reflejara la naturaleza tecnológica e innovadora del contenido.
                    </p>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-green-900 flex items-center justify-center mr-4">
                        <i class="fas fa-lightbulb text-green-400"></i>
                    </div>
                    La Solución
                </h3>
                <div class="space-y-4 text-gray-300">
                    <p>
                        Desarrollamos un portal completo utilizando tecnologías modernas que permitió la gestión eficiente de contenidos en múltiples formatos, con un enfoque especial en la experiencia del usuario.
                    </p>
                    <p>
                        Implementamos un sistema de generación automatizada de podcasts utilizando tecnologías de IA para transformar artículos escritos en audio de alta calidad, con un reproductor personalizado que ofrece controles avanzados.
                    </p>
                    <p>
                        Creamos un diseño responsivo con una paleta de colores azules y gradientes que refleja la identidad de la marca, optimizado para diferentes dispositivos y velocidades de conexión.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Características Destacadas -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold mb-10 text-center">Características Destacadas</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900 p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-900 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse"></div>
                        <i class="fas fa-robot text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Podcast por IA</h4>
                    <p class="text-gray-400">
                        Sistema de generación automatizada de podcasts a partir de artículos escritos, con voces naturales y controles de reproducción avanzados.
                    </p>
                </div>
                
                <div class="bg-gray-900 p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse" style="animation-delay: 0.5s"></div>
                        <i class="fas fa-newspaper text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">CMS Especializado</h4>
                    <p class="text-gray-400">
                        Sistema de gestión de contenido personalizado para diferentes formatos, con categorización avanzada y opciones de personalización.
                    </p>
                </div>
                
                <div class="bg-gray-900 p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-600 to-blue-600 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse" style="animation-delay: 1s"></div>
                        <i class="fas fa-envelope text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Newsletter Personalizable</h4>
                    <p class="text-gray-400">
                        Sistema de suscripción con segmentación por categorías, permitiendo a los lectores recibir solo el contenido que les interesa.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Resultados -->
        <div class="bg-gray-900 p-8 md:p-10 rounded-xl">
            <h3 class="text-2xl font-bold mb-8 text-center">Resultados</h3>
            
            <!-- Visualización dinámica de resultados -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 0s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">+25K</div>
                    <p class="text-gray-400 relative z-10">Lectores mensuales</p>
                </div>
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">15min</div>
                    <p class="text-gray-400 relative z-10">Tiempo promedio de lectura</p>
                </div>
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 2s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">+5K</div>
                    <p class="text-gray-400 relative z-10">Suscriptores al newsletter</p>
                </div>
            </div>
            <div class="text-gray-300">
                <p class="text-center mb-6">
                    ConocIA se ha posicionado como un referente en el ámbito de la información sobre inteligencia artificial en español, atrayendo a un público profesional y especializado.
                </p>
                <div class="flex justify-center">
                    <a href="https://www.conocia.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Visitar ConocIA
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA para más proyectos -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">¿Listo para crear tu propio caso de éxito?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            Nuestro equipo está preparado para ayudarte a convertir tu idea en una solución tecnológica innovadora.
        </p>
        <div class="flex justify-center">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                Iniciar proyecto
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Configuración para la animación temática de ConocIA (portal de noticias de IA)
        const config = {
            nodeCount: 20,              // Cantidad de nodos
            connectionThreshold: 150,   // Distancia máxima entre conexiones
            nodeSize: [2, 5],           // Tamaño mínimo y máximo de nodos
            speed: [0.1, 0.4],          // Velocidad mínima y máxima
            colors: ['#3B82F6', '#38BDF8', '#7DD3FC', '#06b6d4'], // Colores azules para los nodos
            icons: ['📰', '🤖', '📊', '🔍', '💬', '📱', '🎙️', '📡'] // Iconos temáticos de noticias y tecnología
        };

        // Obtener el contenedor
        const container = document.querySelector('.conocia-network-animation');
        if (!container) return;
        
        const width = container.offsetWidth;
        const height = container.offsetHeight;
        
        // Crear canvas
        const canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;
        container.appendChild(canvas);
        
        const ctx = canvas.getContext('2d');
        
        // Crear nodos
        const nodes = [];
        for (let i = 0; i < config.nodeCount; i++) {
            // Algunos nodos tendrán iconos, otros serán círculos regulares
            const hasIcon = Math.random() > 0.6; // 40% de los nodos tendrán iconos
            nodes.push({
                x: Math.random() * width,
                y: Math.random() * height,
                size: config.nodeSize[0] + Math.random() * (config.nodeSize[1] - config.nodeSize[0]),
                speedX: (Math.random() - 0.5) * config.speed[1],
                speedY: (Math.random() - 0.5) * config.speed[1],
                color: config.colors[Math.floor(Math.random() * config.colors.length)],
                hasIcon: hasIcon,
                icon: hasIcon ? config.icons[Math.floor(Math.random() * config.icons.length)] : null,
                pulse: Math.random() * 2 * Math.PI // Fase aleatoria para el efecto pulsante
            });
        }
        
        // Función de animación
        function animate() {
            // Tiempo actual para efectos de animación
            const now = Date.now() / 1000;
            
            // Limpiar canvas
            ctx.clearRect(0, 0, width, height);
            
            // Efecto de "conocimiento fluyendo" - ondas de datos
            for (let i = 0; i < 3; i++) {
                const y = height * (0.3 + i * 0.2);
                const amplitude = 5;
                const frequency = 0.02;
                const speed = 0.5;
                
                ctx.beginPath();
                ctx.moveTo(0, y);
                
                for (let x = 0; x < width; x += 5) {
                    const offset = Math.sin((x * frequency) + (now * speed)) * amplitude;
                    ctx.lineTo(x, y + offset);
                }
                
                ctx.strokeStyle = `rgba(59, 130, 246, ${0.1 - i * 0.03})`;
                ctx.stroke();
            }
            
            // Dibujar conexiones
            ctx.lineWidth = 0.8;
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < config.connectionThreshold) {
                        // Calcular opacidad basada en la distancia
                        const opacity = 1 - (distance / config.connectionThreshold);
                        
                        // Efecto de datos fluyendo por las conexiones
                        const flow = (now * 2) % 2; // 0 a 2 segundos
                        const flowPosition = flow < 1 ? flow : 2 - flow; // 0->1->0 en 2 segundos
                        
                        const gradient = ctx.createLinearGradient(
                            nodes[i].x, 
                            nodes[i].y, 
                            nodes[j].x, 
                            nodes[j].y
                        );
                        
                        gradient.addColorStop(Math.max(0, flowPosition - 0.1), `rgba(59, 130, 246, 0)`);
                        gradient.addColorStop(flowPosition, `rgba(59, 130, 246, ${opacity * 0.8})`);
                        gradient.addColorStop(Math.min(1, flowPosition + 0.1), `rgba(59, 130, 246, 0)`);
                        
                        ctx.strokeStyle = gradient;
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.stroke();
                    }
                }
            }
            
            // Dibujar nodos
            for (const node of nodes) {
                // Efecto pulsante para los nodos
                const pulse = 0.8 + Math.sin(now * 1.5 + node.pulse) * 0.2;
                const nodeSize = node.size * pulse;
                
                if (node.hasIcon) {
                    // Dibujar círculo de fondo para el icono
                    ctx.fillStyle = `rgba(59, 130, 246, 0.2)`;
                    ctx.beginPath();
                    ctx.arc(node.x, node.y, nodeSize * 3, 0, Math.PI * 2);
                    ctx.fill();
                    
                    // Dibujar el icono
                    ctx.font = `${nodeSize * 4}px Arial`;
                    ctx.fillStyle = 'white';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(node.icon, node.x, node.y);
                } else {
                    // Dibujar nodo normal
                    ctx.fillStyle = node.color;
                    ctx.beginPath();
                    ctx.arc(node.x, node.y, nodeSize, 0, Math.PI * 2);
                    ctx.fill();
                    
                    // Añadir brillo
                    ctx.fillStyle = 'rgba(255, 255, 255, 0.7)';
                    ctx.beginPath();
                    ctx.arc(node.x - nodeSize/3, node.y - nodeSize/3, nodeSize/3, 0, Math.PI * 2);
                    ctx.fill();
                }
                
                // Actualizar posición
                node.x += node.speedX;
                node.y += node.speedY;
                
                // Rebotar en los bordes
                if (node.x < 0 || node.x > width) node.speedX *= -1;
                if (node.y < 0 || node.y > height) node.speedY *= -1;
            }
            
            // Continuar animación
            requestAnimationFrame(animate);
        }
        
        // Iniciar animación
        animate();
        
        // Ajustar tamaño del canvas cuando cambia el tamaño de la ventana
        window.addEventListener('resize', function() {
            const newWidth = container.offsetWidth;
            const newHeight = container.offsetHeight;
            
            canvas.width = newWidth;
            canvas.height = newHeight;
            
            // Ajustar posiciones de nodos si es necesario
            for (const node of nodes) {
                if (node.x > newWidth) node.x = newWidth - 10;
                if (node.y > newHeight) node.y = newHeight - 10;
            }
        });
    });
</script>
@endsection