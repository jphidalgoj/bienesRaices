<div class="w-full">  
    <!-- Hero Section con imagen de fondo -->  
    <div class="relative w-full bg-gradient-to-r">  
         
        <form wire:submit.prevent="leerDaatosFormulario">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">  
            

                <!-- Tarjeta de búsqueda -->  
                <div class="bg-white rounded-xl shadow-2xl p-4 md:p-6 max-w-4xl mx-auto">  
                    <!-- Tabs superiores -->  
                    <div class="flex mb-6 border-b ">  
                        <div class="relative">
                            <select 
                                wire:model="searchType" 
                                class="cursor-pointer appearance-none relative pb-4 px-4 md:px-8 text-base md:text-lg font-medium transition-colors duration-200 ease-in-out 
                                       {{ $searchType === 'alquiler' 
                                           ? 'text-primary border-b-2 border-primary' 
                                           : 'text-gray-500 hover:text-gray-700' }}">
                                <option value="alquiler" class="flex items-center gap-2">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                        Alquilar
                                    </span>
                                </option>
                                <option value="venta" class="flex items-center gap-2">
                                    <span class="flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Comprar
                                    </span>
                                </option>
                            </select>
                            <!-- Flecha del select -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                    </div>  

                    <!-- Formulario de búsqueda -->  
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">  
                        <!-- Selector de categoría -->  
                        <div class="md:col-span-3">  
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de propiedad</label>  
                            <select   
                                wire:model="categoria"  
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 text-lg p-3">  
                                <option value="">Todas</option>  
                                @foreach($categorias as $categoria)  
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>  
                                @endforeach  
                            </select>  
                        </div>  

                        <!-- Campo de búsqueda -->  
                        <div class="md:col-span-7">  
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ubicación o características</label>  
                            <div class="relative">  
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">  
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"   
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>  
                                    </svg>  
                                </div>  
                                <input   
                                    type="text"  
                                    wire:model="termino"  
                                    class="w-full pl-10 rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 text-lg p-3"  
                                    placeholder="Buscar por ubicación, provincia o características...">  
                            </div>  
                        </div>  

                        <!-- Botón de búsqueda -->  
                        <div class="md:col-span-2">  
                            <label class="block text-sm font-medium text-transparent mb-1">Buscar</label>  
                            <button  
                                type="submit"  
                                class="w-full h-[42px] bg-primary hover:bg-primary-dark text-gray-700 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2 text-lg cursor-pointer p-3">  
                                <span >Buscar</span>  
                                <svg wire:loading class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">  
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>  
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>  
                                </svg>  
                            </button>  
                        </div>
                    </div>  
                </div>  
            </div> 
        </form> 
    </div>  

     
   
</div>