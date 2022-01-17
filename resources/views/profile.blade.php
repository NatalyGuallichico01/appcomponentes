@extends('plantilla')

@section('content')
    

        <?php
            $etiquetas = ['red' => 'online', 'yellow' => 'internet', 'green' => 'education'];
            $subtih = "A comprehensive guide about online education - Bienvenida";
        ?>
        <div class="container mx-auto mt-5 px-80">

            <x-dynamic-component component="nav1">
                
            </x-dynamic-component>

            <x-alert class="bg-blue-500" color="blue">
                <x-slot name="titulo">
                Perfil
                </x-slot>
                Esto es la página del perfil...
            </x-alert>

            
            <x-form color="blue" margin="mb-5">
                Card number - Perfil
                <x-slot name="content">
                    Expire date -Perfil
                </x-slot>
            </x-form>
           


            <x-card :subtitulo="$subtih" :tags="$etiquetas" color="blue" class="border-2 border-blue-600 border-double border-4 border-light-blue-500">
      
                Perfil
                <x-slot name="contenido">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ullam velit id facere corporis
                laboriosam soluta quasi veritatis nemo veniam, ex magni molestiae iusto? Alias repudiandae magnam
                aspernatur Perfil.............
                </x-slot>
            </x-card> 
        </div>
           
@endsection