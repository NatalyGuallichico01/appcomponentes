<div class="flex flex-wrap place-items-center h-auto">
    <!-- card -->
    
    <div {{ $attributes->merge(['class'=>'overflow-hidden shadow-lg transition duration-500 
        ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60
        md:w-80 cursor-pointer m-auto ']) }}>
           
        
        
        <a href="#" class="w-full block h-full">
            <img alt="blog photo" src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="max-h-40 w-full object-cover"/>
            <div class="bg-white w-full p-4">
                <p class="text-indigo-500 text-2xl font-medium">
                    {{$slot}}
                </p>
                <p class="text-gray-800 text-sm font-medium mb-2">
                    {{$subtitulo}}
                </p>
                <p class="text-gray-600 font-light text-md">
                    {{$contenido}}
                    <a class="inline-flex text-indigo-500" href="#">Read More</a>
                </p>
                
                    @if($existeEtiquetas())
                    <div class="flex flex-wrap justifystarts items-center py-3 border-b-2 text-xs text-white
                    font-medium">
                    @foreach ($etiquetas as $nombre => $etiqueta)
                    <span class="m-1 px-2 py-1 rounded bg-{{$nombre}}-500">
                    #{{$etiqueta}}
                    </span>
                    @endforeach
                    </div>
                    @else
                    <div class="flex flex-wrap justifystarts items-center py-3 text-xs text-white font-medium">
                    <span class="text-black"> No existen etiquetas</span>
                    </div>
                    @endif
                </div>
                <div class="flex items-center mt-2">
                    <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200 '>
        
                    <div class="pl-3">
                        <div class="font-medium">
                            Jean Marc
                        </div>
                        <div class="text-gray-600 text-sm">
                            CTO of Supercars
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
</div>

<!-- Does this resource worth a follow? -->
<div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12 border-solid border-4 border-{{$color}}-500">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
        </a>
    </div>
</div>