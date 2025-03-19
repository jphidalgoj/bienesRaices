<div class="min-h-screen bg-gray-50">  
    <!-- Hero Section con Galería Principal -->  
    <div class="relative h-[60vh] md:h-[70vh] overflow-hidden">  
        <!-- Imagen Principal -->  
        <div class="absolute inset-0">  
            @if ($propiedad->imagen->isNotEmpty())  
                <img src="{{ asset('storage/'. $propiedad->imagen->first()->image_path[0]) }}"   
                     alt="{{ $propiedad->title }}"  
                     class="w-full h-full object-cover">  
            @endif  
              
        </div>  

        <!-- Información Superpuesta -->  
        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 text-white">  
            <div class="max-w-7xl mx-auto">  
                <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $propiedad->title }}</h1>  
                <div class="flex items-center gap-4 text-lg">  
                    <span class="bg-blue-600 px-4 py-2 rounded-full font-semibold">  
                        ${{ number_format($propiedad->price, 2) }}  
                    </span>  
                    <span class="flex items-center">  
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">  
                            <path d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"/>  
                        </svg>  
                        {{ $propiedad->ciudad->nombre }}, {{ $propiedad->provincia->nombre }}  
                    </span>  
                </div>  
            </div>  
        </div>  
    </div>  

    <!-- Contenido Principal -->  
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">  
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">  
            <!-- Columna Principal -->  
            <div class="lg:col-span-2">  
                <!-- Características Principales -->  
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">  
                    <div class="grid grid-cols-3 gap-4 text-center">  
                        <div class="p-4">  
                            <span class="block text-2xl font-bold text-blue-600">{{ $propiedad->square_feet }}</span>  
                            <span class="text-gray-500">m²</span>  
                        </div>  
                        <div class="p-4">  
                            <span class="block text-2xl font-bold text-blue-600">{{ $propiedad->bedrooms }}</span>  
                            <span class="text-gray-500">Habitaciones</span>  
                        </div>  
                        <div class="p-4">  
                            <span class="block text-2xl font-bold text-blue-600">{{ $propiedad->bathrooms }}</span>  
                            <span class="text-gray-500">Baños</span>  
                        </div>  
                    </div>  
                </div>  

                <!-- Descripción -->  
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">  
                    <h2 class="text-2xl font-bold mb-4">Descripción</h2>  
                    <p class="text-gray-600 leading-relaxed">  
                        {{ $propiedad->description }}  
                    </p>  
                </div>  

                <!-- Galería de Imágenes -->  
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">  
                    <h2 class="text-2xl font-bold mb-4">Galería</h2>  
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">  
                        @foreach($propiedad->imagen as $imagen)  
                            @foreach($imagen->image_path as $path)  
                                <div class="aspect-square overflow-hidden rounded-lg">  
                                    <img src="{{ asset('storage/'.$path) }}"   
                                         alt="Imagen de la propiedad"  
                                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">  
                                </div>  
                            @endforeach  
                        @endforeach  
                    </div>  
                </div>  

                <!-- Características Detalladas -->  
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">  
                    <h2 class="text-2xl font-bold mb-4">Características</h2>  
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">  
                        <!-- Aquí puedes agregar más características según tu modelo -->  
                        <div class="flex items-center gap-2">  
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">  
                                <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"/>  
                            </svg>  
                            <span>Garaje</span>  
                        </div>  
                        <!-- Agrega más características aquí -->  
                    </div>  
                </div>  
            </div>  

            <!-- Sidebar -->  
            <div class="lg:col-span-1">  
                <!-- Tarjeta de Contacto -->  
                @livewire('contactos-propiedades',['propiedad'=>$propiedad])  
            </div>  
        </div>  
    </div>  

    <!-- Propiedades Relacionadas -->  
    <div class="bg-gray-100 py-12">  
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">  
            <h2 class="text-2xl font-bold mb-8">Propiedades Similares</h2>  
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">  
                <!-- Aquí puedes mostrar propiedades relacionadas -->  
            </div>  
        </div>  
    </div>  
</div>