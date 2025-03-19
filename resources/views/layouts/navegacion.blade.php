<nav class="bg-white shadow-lg" x-data="{ mobileMenu: false }">  
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">  
        <div class="flex justify-between h-16">  
            <!-- Logo y nombre -->  
            <div class="flex items-center">  
                <a href="{{route('inicio')}}" class="flex items-center">  
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Hogarly">  
                    <span class="text-2xl font-bold text-gray-800 ml-2">Bienes Raices</span>  
                </a>  
            </div>  

            <!-- Enlaces de navegación para pantallas medianas y grandes -->  
            <div class="hidden md:flex md:items-center md:space-x-6">  
                <a href="{{route('propiedadesComprar')}}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">  
                    Comprar  
                </a>  
                <a href="{{route('propiedadesAlquilar')}}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">  
                    Alquilar  
                </a>  
            </div>  

            <!-- Botón menú móvil -->  
            <div class="flex items-center md:hidden">  
                <button type="button"   
                        @click="mobileMenu = !mobileMenu"  
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">  
                    <span class="sr-only">Abrir menú</span>  
                    <!-- Ícono menú -->  
                    <svg class="h-6 w-6" x-show="!mobileMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />  
                    </svg>  
                    <!-- Ícono cerrar -->  
                    <svg class="h-6 w-6" x-show="mobileMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">  
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />  
                    </svg>  
                </button>  
            </div>  
        </div>  
    </div>  

    <!-- Menú móvil -->  
    <div class="md:hidden" x-show="mobileMenu">  
        <div class="px-2 pt-2 pb-3 space-y-1">  
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50">  
                Comprar  
            </a>  
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50">  
                Alquilar  
            </a>  
        </div>  
    </div>  
</nav>