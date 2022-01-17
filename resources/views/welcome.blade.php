@extends('plantilla')

@section('content')

        <?php
            $etiquetas = ['red' => 'online', 'blue' => 'internet', 'green' => 'education'];
            $subtip = "A comprehensive guide about online education - Perfil";
        ?>
        <div class="container mx-auto mt-5 px-80">

            <x-dynamic-component component="nav2">

            </x-dynamic-component>

            
        <x-alert class="bg-green-500 " color="green">
            <x-slot name="titulo">
                Bienvenida
            </x-slot>
                Esto es la página de bienvenida...
            </x-alert>

            
            <x-form margin="mb-5" color="green">
                Card number - Bienvenida
                <x-slot name="content">
                    Expire date - Bienvenida
                </x-slot>
            </x-form>
                   


            <x-card :subtitulo="$subtip" :tags="$etiquetas" color="green" class="border-2 border-green-600">
                Bienvenida
            
            <x-slot name="contenido">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ullam velit id facere corporis
                laboriosam soluta quasi veritatis nemo veniam, ex magni molestiae iusto? Alias repudiandae magnam
                aspernatur Bienvenida.............
                </x-slot>
                
            </x-card>
        </div>
            
@endsection