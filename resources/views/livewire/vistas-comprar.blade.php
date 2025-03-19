<div>
    <!-- Encabezado -->  
    <div class="text-center mb-12 mt-4">  
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">  
            Propiedades a Comprar  
        </h2>  
        <div class="mt-4 w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>  
    </div> 
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
        @forelse ($propiedades as $property) <!-- Aquí se define $property -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-1">
                <!-- Imagen destacada -->
                <div class="relative aspect-[4/3] overflow-hidden">
                    @if ($property->imagen->isNotEmpty())
                        @foreach ($property->imagen as $imagen)
                            @foreach ($imagen->image_path as $imagePath) <!-- Accede directamente al array -->
                                <img src="{{ asset('storage/'. $imagePath) }}" 
                                     alt="{{ $property->title }}" 
                                     class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110" />
                            @endforeach
                        @endforeach
                    @else
                        <!-- Imagen de placeholder si no hay imagen destacada -->
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">Sin imagen</span>
                        </div>
                    @endif
    
                    <!-- Badge Destacado -->
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Destacado
                    </div>
    
                    <!-- Precio -->
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                        <span class="text-lg font-bold text-gray-900">
                            ${{ number_format($property->price, 2) }}
                        </span>
                    </div>
                </div>
    
                <!-- Contenido -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 line-clamp-1">
                        {{ $property->title }}
                    </h3>
    
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ $property->description }}
                    </p>
    
                    <!-- Características -->
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            {{ $property->square_feet }} m²
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            {{ $property->bedrooms }} hab.
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                            </svg>
                            {{ $property->bathrooms }} baños
                        </div>
                    </div>
    
                    <!-- Botón -->
                    <a href="{{ route('propiedadShow', $property->id) }}" 
                       class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-300">
                        Ver Detalles
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full">
                <div class="text-center py-12 bg-white rounded-xl">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No hay propiedades destacadas</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        No se encontraron propiedades destacadas en este momento.
                    </p>
                </div>
            </div>
        @endforelse
    </div>
</div>