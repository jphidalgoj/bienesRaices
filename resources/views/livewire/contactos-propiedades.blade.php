<div>
    <div class="bg-white rounded-xl shadow-sm p-6 sticky top-4">  
        <h3 class="text-xl font-bold mb-4">¿Te interesa esta propiedad?</h3>  
        @if($successMessage)  
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">  
                {{ $successMessage }}  
            </div>  
        @endif  
        <form wire:submit.prevent="enviarMensaje"
        class="space-y-4">  
            <div>  
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>  
                <input 
                wire:model='name'
                id="name"
                placeholder='Tu Nombre'
                type="text"   
                class="w-full p-3 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">  
                @error('name')  
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>  
                @enderror 
            </div>  
            <div>  
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>  
                <input type="email" 
                wire:model='email'
                id="email"
                placeholder='Tu Email'  
                       class="w-full p-3 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"> 
                @error('email')  
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>  
                @enderror  
            </div>  
            <div>  
                <label class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>  
                <input type="tel"
                wire:model='tel'
                id="tel"
                placeholder='Tu telefono'   
                       class="w-full p-3 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"> 
                @error('tel')  
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>  
                @enderror  
            </div>  
            <div>  
                <label class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>  
                <textarea rows="4" 
                wire:model='contenido'  
                          class="w-full p-3 rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea> 
                @error('name')  
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>  
                @enderror  
            </div>  
            <button type="submit"   
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">  
                Enviar Mensaje  
            </button>  
        </form>  
    </div>
</div>
