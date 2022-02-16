<template>
  <app-layout title="Productos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Producto
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <!-- linea ingresada por mi            -->
          <h1 v-for="(objeto, index) in Productos" :key="index">
            {{ objeto.nombre }}
          </h1>

          <h1>prueba de formulario</h1>

          <div>
            <div class="w-full max-w-m">
              <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Cantidad"
                  >
                    Cantidad
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
                    v-model="cantidad"
                    type="text"
                    placeholder="Cantidad"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Nombre"
                  >
                    Nombre
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
                    v-model="nombre"
                    type="text"
                    placeholder="Nombre"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Medida"
                  >
                    Medida
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
                    v-model="medida"
                    type="text"
                    placeholder="Medida"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Categoria"
                  >
                    Categoria
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
                    v-model="categoria"
                    type="text"
                    placeholder="Categoria"
                  />
                </div>

                <div class="flex items-center justify-between">
                  <button
                  type="button"
                   @click="regProductos()"
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
        // props:["Productos"],

        data(){
            return{ 

cantidad:0,
nombre:"",
medida:0,
categoria:"",
arrayData:[],

            };

        },
props:["producto"],

methods:{


listarDatos(){
    let me = this;
var url = "*/api/producto/data";

axios.get(url)
.then(function (response){
    var result =response.data;
     me.arrayData = result.productos;
})
  .catch(function(error){
      console.log(error);
})  

},
metodo(msj){
    alert(msj);
},


regProductos(){
let me = this;
var url = "/api/producto/registrar";
axios.post(url,
 {
     cantidad:this.cantidad,
     nombre:this.nombre,
     medida:this.medida,
    categoria:this.categoria,

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
