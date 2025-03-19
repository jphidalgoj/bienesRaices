  

  

<div>  
    @if($getState())  
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">  
            @foreach($getState() as $imageUrl)  
                <div class="relative aspect-square">  
                    <img   
                        src="{{ Storage::disk('public')->url($imageUrl) }}"  
                        alt="Imagen"  
                        class="w-full h-full object-cover rounded-lg"  
                    />  
                </div>  
            @endforeach  
        </div>  
    @else  
        <div class="text-gray-500">No hay imágenes disponibles</div>  
    @endif  
</div>
