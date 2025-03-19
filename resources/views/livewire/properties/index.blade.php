<div>  
    <div class="relative h-[600px]">  
        <!-- Imagen de fondo con overlay -->  
        <div class="absolute inset-0">  
            <img src="{{ asset('storage/img/homeCasa.jpg') }}" alt="Background" class="w-full h-full object-cover">  
            <div class="absolute inset-0 bg-gray-600/50"></div>  
        </div>  

        <!-- Contenido -->  
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">  
            <h1 class="text-white text-4xl md:text-5xl font-bold text-center mb-4">  
                BIENVENIDO A TU NUEVA CASA  
            </h1>  
            <p class="text-white text-xl text-center mb-8">  
                Compra, renta o vende inmuebles en Ecuador  
            </p>  

            <!-- Formulario de búsqueda -->  
            <div class="w-full max-w-4xl mx-auto">  
                {{-- espacio de busqueda --}}
                @livewire('fintrar-busqueda')
              
            </div>  
        </div>  
    </div>  

    <section class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50">  
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">  
            <!-- Encabezado -->  
            <div class="text-center mb-16">  
                <h2 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-teal-500">  
                    Encuentra, vende o alquila tu casa fácilmente  
                </h2>  
                <p class="mt-4 text-lg text-gray-600">  
                    Tu próximo hogar está a solo unos clics de distancia  
                </p>  
            </div>  
    
            <!-- Tarjetas -->  
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">  
                <!-- Comprar -->  
                <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-300 hover:transform hover:-translate-y-2 hover:shadow-2xl">  
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-blue-600 rounded-t-2xl"></div>  
                    <div class="mb-6">  
                        <div class="inline-block p-4 bg-blue-100 rounded-lg">  
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>  
                            </svg>  
                        </div>  
                    </div>  
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Comprar una casa</h3>  
                    <p class="text-gray-600 mb-6 line-clamp-3">  
                        ¿Sueña con tener su propia casa? ¡Haga ese sueño realidad! Con nuestra experiencia y conocimiento del mercado, le ayudaremos a encontrar la casa de sus sueños en el lugar perfecto.  
                    </p>  
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700">  
                        Explorar casas  
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>  
                        </svg>  
                    </a>  
                </div>  
    
                <!-- Vender -->  
                <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-300 hover:transform hover:-translate-y-2 hover:shadow-2xl">  
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-green-600 rounded-t-2xl"></div>  
                    <div class="mb-6">  
                        <div class="inline-block p-4 bg-green-100 rounded-lg">  
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>  
                            </svg>  
                        </div>  
                    </div>  
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Vender una casa</h3>  
                    <p class="text-gray-600 mb-6 line-clamp-3">  
                        ¿Es propietario y está pensando en vender su propiedad? ¡Deje que nos ocupemos de todo el proceso! Con nuestra estrategia de marketing y nuestra red de contactos, le aseguramos que su propiedad será vendida rápida y eficientemente.  
                    </p>  
                    <a href="#" class="inline-flex items-center text-green-600 font-semibold group-hover:text-green-700">  
                        Publica hoy  
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>  
                        </svg>  
                    </a>  
                </div>  
    
                <!-- Alquilar -->  
                <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-300 hover:transform hover:-translate-y-2 hover:shadow-2xl">  
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-purple-600 rounded-t-2xl"></div>  
                    <div class="mb-6">  
                        <div class="inline-block p-4 bg-purple-100 rounded-lg">  
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>  
                            </svg>  
                        </div>  
                    </div>  
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Alquilar una casa</h3>  
                    <p class="text-gray-600 mb-6 line-clamp-3">  
                        ¿Está buscando un lugar para vivir temporalmente? ¡Tenemos la solución perfecta para usted! Con nuestra amplia selección de propiedades disponibles para alquilar, encontrará el lugar ideal para su estancia.  
                    </p>  
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold group-hover:text-purple-700">  
                        Encuentra alquileres  
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>  
                        </svg>  
                    </a>  
                </div>  
            </div>  
        </div>  
    </section>

    <div>
        @livewire('properties.featured-properties')
    </div>
   
</div>