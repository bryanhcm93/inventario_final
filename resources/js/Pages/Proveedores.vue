<template>
    <app-layout title="Proveedores">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Proveedores
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

          <!-- linea ingresada por mi            -->
                    <h1 v-for="(objeto,index) in Proveedores" :key="index">
                        {{objeto.nombre}}
                                    

                    </h1>

                    <h1> prueba proveedores</h1>
                    <div>

                        <div class="w-full max-w-m">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Nit">
            NIT
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nit" type="text" placeholder="Digite Nit de la empresa">
      </div>
  
       <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Nombre proveedor">
        Nombre del proveedor
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Proveedor" type="text" placeholder="Proveedor de la empresa">
      </div>
  
       <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Direccion empresa">
          Dirección Empresa
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" type="text" placeholder="Direccion empresa">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Direccion empresa">
          telefono Empresa
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" type="text" placeholder="Telefono empresa">
      </div>

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Guardar
        </button>
      
      </div>
    </form>
   
  </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
     export default defineComponent({
        components: {
            AppLayout,
                  },
        props:["Proveedores"],
    })
</script>
