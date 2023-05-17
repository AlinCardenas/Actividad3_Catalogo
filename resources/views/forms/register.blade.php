<x-layout title="Register">
    <div class="container max-w-6xl mx-auto mt-10">
        
        <form action="{{route('enviar')}}" method="POST" enctype="multipart/form-data">
            <h1 class="text-3xl text-center font-bold mt-3 text-gray-700">Formulario</h1>
            @csrf
            <div class="">
                <div class="grid grid-cols-3 gap-3 mt-6">
    
                    <div class="col-span-3 ">
                        <label class="font-bold text-gray-600"  for="nombre">Nombre</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="nombre" required>
                    </div>
                    
                    <div class="col-span-2">
                        <label class="font-bold text-gray-600" for="calle">Calle</label>
                        <input  class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="calle" id="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" >Código postal</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" >Número interior</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name=""required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" >Número exterior</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 "  type="text" name=""required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="">País</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="" required>
                    </div>

                    <div class="col-span-2">
                        <label class="font-bold text-gray-600" for="">Descripcion</label>
                        <textarea class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " name="" required></textarea>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="imagen">Imagen</label>
                        <input class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="imagen" >
                    </div>
                    
                    <div>
                        <button class="bg-purple-500  py-2 px-5 hover:bg-purple-600 text-white font-bold  rounded-lg" type="submit ">Enviar</button>
                    </div>

                    
                </div>
                
            </div>

        </form>
        
    </div>
</x-layout>