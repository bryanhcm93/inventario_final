<template>
  <app-layout title="Productos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Producto
      </h2>
    </template>

    <button
      v-if="tpAccion == 0"
      @click="nuevoP"
      type="button"
      class="
        border border-green-600
        bg-green-700
        text-white
        rounded-md
        px-4
        py-2
        m-2
        transition
        duration-500
        ease
        select-none
        hover:bg-blue-500
        focus:outline-none focus:shadow-outline
      "
    >
      Nuevo Producto
    </button>
    <!-- menu principal de productos -->
    <div class="overflow-x-auto" v-if="tpAccion == 0">
      <div class="w-full lg:w-5/6">
        <div class="bg-white shadow-md rounded my-6">
          <table class="min-w-max w-full table-auto">
            <thead>
              <tr
                class="
                  bg-gray-200
                  text-gray-600
                  uppercase
                  text-sm
                  leading-normal
                "
              >
                <th class="py-3 px-6 text-left">Nombre producto</th>
                <th class="py-3 px-6 text-left">Cantidad</th>
                <th class="py-3 px-6 text-center">Medida</th>
                <th class="py-3 px-6 text-center">categoria</th>
                <th class="py-3 px-6 text-center">Acciones</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
              <tr
                v-for="(objeto, index) in arrayData"
                :key="index"
                class="border-b border-gray-200 hover:bg-gray-100"
              >
                <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium" v-text="objeto.nombre"></span>
                  </div>
                </td>

                <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium">{{ objeto.cantidad }}</span>
                  </div>
                </td>

                <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium">{{ objeto.medida }}</span>
                  </div>
                </td>

                <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium">{{ objeto.categoria }}</span>
                  </div>
                </td>

                <td class="py-3 px-6 text-center">
                  <div class="flex item-center justify-center">
                    <div
                      class="
                        w-4
                        mr-2
                        transform
                        hover:text-purple-500 hover:scale-110
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                        />
                      </svg>
                    </div>
                    <div
                      class="
                        w-4
                        mr-2
                        transform
                        hover:text-purple-500 hover:scale-110
                      "
                      title="editar"
                      @click="editarProducto(objeto)"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                        />
                      </svg>
                    </div>
                    <div
                      class="
                        w-4
                        mr-2
                        transform
                        hover:text-purple-500 hover:scale-110
                      "
                      title="eliminar"
                      @click="eliminarProducto(objeto)"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        />
                      </svg>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- <h1> formulario productos</h1> -->

    <div>
      <div class="w-full max-w-m" v-if="tpAccion == 1">
        <p class="font-semibold text-gray-2000" v-text="titulo"></p>
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
              v-if="opcBoton == true"
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
                focus:outline-none focus:shadow-outline
              "
            >
              Guardar
            </button>
          </div>
          <br />

          <button
            v-if="opcBoton == false"
            type="button"
            @click="actualizarProducto()"
            class="
              bg-blue-500
              hover:bg-blue-700
              text-white
              font-bold
              py-2
              px-4
              rounded
              focus:outline-none focus:shadow-outline
            "
          >
            actualizar
          </button>
          <br />

          <div class="flex items-center justify-between">
            <button
              type="button"
              @click="cerrarP()"
              class="
                bg-gray-500
                hover:bg-black-700
                text-white
                font-bold
                py-2
                px-4
                rounded
                focus:outline-none focus:shadow-outline
              "
            >
              Cerrar
            </button>
          </div>
          <br />
        </form>
      </div>
    </div>

    <!-- mensaje de eliminar -->
    <div v-if="tpAccion == 2">
      <div
        class="
          flex flex-col
          space-y-4
          min-w-screen
          h-screen
          animated
          fadeIn
          faster
          fixed
          left-0
          top-0
          flex
          justify-center
          items-center
          inset-0
          z-50
          outline-none
          focus:outline-none
          bg-gray-900
        "
      >
        <div
          class="
            flex flex-col
            p-8
            bg-white
            shadow-md
            hover:shodow-lg
            rounded-2xl
          "
        >
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="
                  w-16
                  h-16
                  rounded-2xl
                  p-3
                  border border-blue-100
                  text-blue-400
                  bg-blue-50
                "
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
              <div class="flex flex-col ml-3">
                <div class="font-medium leading-none">
                  Desea eliminar el producto ?{{ nomProducto }}
                </div>
                <p class="text-sm text-gray-600 leading-none mt-1">
                  Este proceso no es reversible
                </p>
              </div>
            </div>
            <button
              @click="destroyProducto"
              class="
                flex-no-shrink
                bg-red-500
                px-5
                ml-4
                py-2
                text-sm
                shadow-sm
                hover:shadow-lg
                font-medium
                tracking-wider
                border-2 border-red-500
                text-white
                rounded-full
              "
            >
              Si
            </button>

            <button
              @click="cerrarP"
              class="
                flex-no-shrink
                bg-blue-500
                px-5
                ml-4
                py-2
                text-sm
                shadow-sm
                hover:shadow-lg
                font-medium
                tracking-wider
                border-2 border-blue-500
                text-white
                rounded-full
              "
            >
              No
            </button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from "axios";
export default defineComponent({
  components: {
    AppLayout,
  },
  // props:["Productos"],

  data() {
    return {
      tpAccion: 0,
      idProducto: 0,
      cantidad: 0,
      nombre: "",
      medida: 0,
      categoria: "",
      arrayData: [],
      modal: false,
      titulo: "",
      opcBoton: true,
      nomProducto: "",
    };
  },
  props: ["productos"],

  methods: {


    listarDatos() {
      let me = this;
      var url = "/api/producto/data";

      axios
        .get(url)
        .then(function (response) {
          var result = response.data;
          me.arrayData = result.Productos;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
   
regProductos() {
      let me = this;

      var url = "/api/producto/registrar";
      axios
        .post(url, {
          cantidad: this.cantidad,
          nombre: this.nombre,
          medida: this.medida,
          categoria: this.categoria,
        })
        .then(function (response) {
          alert("registro guardado exitosamente");
          this.listarDatos();
          this.cerrarP();
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },

    actualizarProducto() {
      let me = this;
      var url = "/api/producto/actualizar";
      axios
        .put(url, {
          id: this.idProducto,
          cantidad: this.cantidad,
          nombre: this.nombre,
          medida: this.medida,
          categoria: this.categoria,
        })
        .then(function (response) {
          alert("registro actualizado exitosamente");

          this.listarDatos();
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },
editarProducto(data = []) {
      this.tpAccion = 1;
      this.opcBoton = false;
      this.titulo = "Actualizar producto";

      this.idProducto = data["id"];
      this.nombre = data["nombre"];
      this.cantidad = data["cantidad"];
      this.medida = data["medida"];
      this.categoria = data["categoria"];
    },
    
  
   
    destroyProducto() {
      let me = this;
      var url = "/api/producto/eliminar";
      axios
        .post(url, {
          id: this.idProducto,
        })
        .then(function (response) {
          me.listarDatos();

          alert("eliminado exitosamente");
          me.cerrarP();
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    eliminarProducto(data = []) {
      this.tpAccion = 2;
      this.idProducto = data["id"];
      this.nomProducto = data["nombre"];
      this.title = "";

      
    },

     nuevoP() {
      this.tpAccion = 1;
      this.titulo = "Registro nuevo producto";
    },

    cerrarP() {
      this.tpAccion = 0;
      location.reload();
    },
    
  },
  mounted() {
    this.listarDatos();
  },

 
});
</script>
