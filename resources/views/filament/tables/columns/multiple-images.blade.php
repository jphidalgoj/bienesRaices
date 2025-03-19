<div class="flex space-x-2 overflow-x-auto py-1">  
    @php  
        $imagePaths = is_string($getRecord()->image_path)   
            ? json_decode($getRecord()->image_path)   
            : $getRecord()->image_path;  
    @endphp  

    @if(is_array($imagePaths))  
        @foreach($imagePaths as $image)  
            <img   
                src="{{ Storage::url($image) }}"   
                alt="Imagen de propiedad"   
                class="w-20 h-20 object-cover rounded-lg shadow-sm"  
            />  
        @endforeach  
    @endif  
</div>  