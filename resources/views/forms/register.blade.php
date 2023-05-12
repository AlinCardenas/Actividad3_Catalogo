<x-layout title="Register">
    <div class="container">
        <h1 class="text-3xl text-center font-bold mt-3 text-gray-700">Formulario</h1>

        <form action="" method="POST">
            @csrf
            <div class="flex justify-center h-screen ">
                <div class="grid grid-cols-3 gap-3 mt-6">
    
                    <div class="col-span-3 ">
                        <label class="font-bold text-gray-600"  for="">Nombre</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="nombre" id="" required>
                    </div>
                    
    
                    <div class="col-span-2">
                        <label class="font-bold text-gray-600" for="">Calle</label>
                        <input  class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="calle" id="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="">CP</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="" id="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="">Num Ext</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="" id="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="">Num Int</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 "  type="text" name="" id="" required>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600" for="">Pais</label>
                        <input class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " type="text" name="" id="" required>
                    </div>

                    <div class="col-span-2">
                        <label class="font-bold text-gray-600" for="">Descripcion</label>
                        <textarea class="shadow-2xl rounded-lg p-2 w-full border-slate-300 " name="" id="" required></textarea>
                    </div>
    
                    <div>
                        <label class="font-bold text-gray-600 " for="">Imagen</label>
                        <input class=" w-full appearance-none rounded-lg bg-white" type="file" name="" id="" >
                    </div>
    
                    

                    <div>
                        <button class="bg-purple-500 py-2 px-5 hover:bg-purple-600 text-white font-bold  rounded-lg" type="submit ">Enviar</button>

                    </div>

                    
                </div>
                
            </div>

        </form>
        
    </div>
</x-layout>