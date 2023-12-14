<x-layouts.base> 
    <div class="w-auto h-[809px] bg-cover bg-no-repeat relative z-[5] md:z-10" style="background-image: url({{ Storage::url($curso->header_image) }});"> </div>
    <div class="absolute right-0 z-50 h-[25rem] w-[55rem] bg-no-repeat mt-[-15rem] md:block hidden" style="background-position-x: right; background-image: url( {{ Vite::asset('public/images/cubo-direita.png')}});"></div>
   
</x-layouts.base>

