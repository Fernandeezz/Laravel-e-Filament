<x-layouts.base> 
    <h1>{{ $curso->title }}</h1>
    
    @foreach ($cursos as $curso)
        <h1>{{ $curso->title }}</h1>
    @endforeach
</x-layouts.base>

