// Sistema de filtrado por industria para testimonios
document.addEventListener('DOMContentLoaded', function() {
    const industryFilters = document.querySelectorAll('.industry-filter');
    const testimonialCards = document.querySelectorAll('.grid.grid-cols-1.lg\\:grid-cols-2 > div');
    const filterResults = document.getElementById('filterResults');
    
    if (industryFilters.length) {
        // Aplicar efecto de carga inicial a las tarjetas
        testimonialCards.forEach(card => {
            card.classList.add('loading');
            setTimeout(() => {
                card.classList.remove('loading');
            }, 1000 + Math.random() * 1000);
        });
        
        industryFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                // Quitar la clase active de todos los filtros
                industryFilters.forEach(f => {
                    f.classList.remove('active');
                    f.classList.remove('bg-blue-600');
                    f.classList.add('bg-blue-900/50');
                    f.classList.remove('text-white');
                    f.classList.add('text-blue-300');
                });
                
                // Añadir la clase active al filtro clicado
                this.classList.add('active');
                this.classList.add('bg-blue-600');
                this.classList.remove('bg-blue-900/50');
                this.classList.add('text-white');
                this.classList.remove('text-blue-300');
                
                const selectedIndustry = this.textContent.trim();
                let visibleCount = 0;
                
                // Filtrar las tarjetas de testimonios
                testimonialCards.forEach(card => {
                    const cardIndustry = card.querySelector('.bg-blue-900\\/30.px-3.py-1.rounded-full');
                    
                    if (selectedIndustry === 'Todos' || 
                        (cardIndustry && cardIndustry.textContent.trim().includes(selectedIndustry))) {
                        // Mostrar con animación
                        card.classList.remove('hidden');
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.5s ease';
                            card.style.opacity = '1';
                        }, 50);
                        visibleCount++;
                        
                        // Añadir efecto de carga brevemente
                        card.classList.add('loading');
                        setTimeout(() => {
                            card.classList.remove('loading');
                        }, 500);
                    } else {
                        // Ocultar con animación
                        card.style.transition = 'opacity 0.5s ease';
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.classList.add('hidden');
                        }, 500);
                    }
                });
                
                // Actualizar el contador de resultados
                if (filterResults) {
                    filterResults.innerHTML = `<span class="bg-blue-900/30 px-2 py-1 rounded-full text-blue-300 text-xs">${visibleCount} testimonio${visibleCount !== 1 ? 's' : ''} ${selectedIndustry !== 'Todos' ? 'en ' + selectedIndustry : ''}</span>`;
                }
            });
        });
    }

    // Funcionalidad "Ver más" para testimonios truncados
    const showMoreButtons = document.querySelectorAll('.show-more');
    
    showMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const testimonialContent = this.previousElementSibling;
            const testimonialContainer = this.parentElement;
            const fullContent = testimonialContainer.dataset.fullContent || '';
            
            if (this.textContent === 'Ver más') {
                // Añadir efecto de carga
                testimonialContainer.classList.add('loading');
                
                // Expandir con un pequeño retraso para el efecto visual
                setTimeout(() => {
                    // Expandir
                    const originalText = testimonialContent.textContent;
                    const fullTestimonial = originalText.replace(/\.\.\."/g, '') + fullContent + '"';
                    testimonialContent.textContent = fullTestimonial;
                    this.textContent = 'Ver menos';
                    
                    // Animar expansión
                    testimonialContent.style.maxHeight = 'none';
                    testimonialContent.classList.remove('min-h-[80px]');
                    
                    // Quitar efecto de carga
                    testimonialContainer.classList.remove('loading');
                }, 300);
            } else {
                // Añadir efecto de carga
                testimonialContainer.classList.add('loading');
                
                // Colapsar con un pequeño retraso para el efecto visual
                setTimeout(() => {
                    // Colapsar
                    testimonialContent.textContent = '"' + testimonialContent.textContent.substring(1).slice(0, 180) + '..."';
                    this.textContent = 'Ver más';
                    
                    // Animar colapso
                    testimonialContent.classList.add('min-h-[80px]');
                    
                    // Quitar efecto de carga
                    testimonialContainer.classList.remove('loading');
                }, 300);
            }
        });
    });

    // Efectos de aparición al hacer scroll
    const revealItems = document.querySelectorAll('.grid > div, .max-w-5xl.mx-auto > div');
    
    function revealOnScroll() {
        const windowHeight = window.innerHeight;
        
        revealItems.forEach(item => {
            const itemTop = item.getBoundingClientRect().top;
            
            if (itemTop < windowHeight - 50) {
                item.classList.add('opacity-100');
                item.classList.add('transform', 'translate-y-0');
                item.classList.remove('opacity-0');
                item.classList.remove('translate-y-10');
            }
        });
    }
    
    // Inicialmente configurar todos los elementos a invisible
    revealItems.forEach(item => {
        if (!item.classList.contains('active')) {
            item.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
        }
    });
    
    // Evento de scroll
    window.addEventListener('scroll', revealOnScroll);
    
    // Ejecutar una vez al cargar para los elementos visibles
    setTimeout(revealOnScroll, 300);
});