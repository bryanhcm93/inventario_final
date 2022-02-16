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
          <h1 v-for="(objeto, index) in Proveedores" :key="index">
            {{ objeto.nombre }}
          </h1>

          <h1>prueba proveedores</h1>
          <div>
            <div class="w-full max-w-m">
              <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Nombre proveedor"
                  >
                    Nombre del proveedor
                  </label>
                  <input
                    class="
                      shadow
                      appearance-none
                      border
                      rounded
                      w-full
                      py-2
                      px-3
                      text-gray-700
                      leading-tight
                      focus:outline-none focus:shadow-outline
                    "
                    v-model="nombreProveedor"
                    type="text"
                    placeholder="Proveedor de la empresa"
                  />
                </div>
                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Nit proveedor"
                  >
                    Nit  proveedor
                  </label>
                  <input
                    class="
                      shadow
                      appearance-none
                      border
                      rounded
                      w-full
                      py-2
                      px-3
                      text-gray-700
                      leading-tight
                      focus:outline-none focus:shadow-outline
                    "
                    v-model="nitProveedor"
                    type="text"
                    placeholder="Proveedor de la empresa"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Direccion empresa"
                  >
                    Dirección Empresa
                  </label>
                  <input
                    class="
                      shadow
                      appearance-none
                      border
                      rounded
                      w-full
                      py-2
                      px-3
                      text-gray-700
                      leading-tight
                      focus:outline-none focus:shadow-outline
                    "
                    v-model="direccionProveedor"
                    type="text"
                    placeholder="Direccion empresa"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Direccion empresa"
                  >
                    telefono Empresa
                  </label>
                  <input
                    class="
                      shadow
                      appearance-none
                      border
                      rounded
                      w-full
                      py-2
                      px-3
                      text-gray-700
                      leading-tight
                      focus:outline-none focus:shadow-outline
                    "
                    v-model="telefonoProveedor"
                    type="text"
                    placeholder="Telefono empresa"
                  />
                </div>
        <div class="flex items-center justify-between">
                  <button
                  type="button"
                   @click="regProveedores()"
                    class="
                      bg-blue-500
                      hover:bg-blue-700
                      text-white
                      font-bold
                      py-2
                      px-4
                      rounded
                      focus:outline-none focus:shadow-outline"                  
                  >
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
import axios from 'axios';
     export default defineComponent({
        components: {
            AppLayout,
                  },
        // props:["Proveedores"],

        data(){
            return{ 

nitProveedor:"",
nombreProveedor:"",
telefonoProveedor:"",
direccionProveedor:"",
arrayData:[],

            };

        },
props:["proveedores"],

methods:{


listarDatos(){
    let me = this;
var url = "*/api/proveedor/data";

axios.get(url)
.then(function (response){
    var result =response.data;
     me.arrayData = result.proveedores;
})
  .catch(function(error){
      console.log(error);
})  

},
metodo(msj){
    alert(msj);
},


regProveedores(){
let me = this;
var url = "/api/proveedor/registrar";
axios.post(url,
 {
     nitProveedor:this.nitProveedor,
     nombreProveedor:this.nombreProveedor,
     telefonoProveedor:this.telefonoProveedor,
     direccionProveedor:this.direccionProveedor,
    

 }).then(function(response)
 {
    
    alert("registro guardado exitosamente");
    this.listarDatos();

})
.catch(function (error){
    console.log(error.message);
});
},

verProducto(){

    alert("Boton ver ok");
}

}
    })
</script>
