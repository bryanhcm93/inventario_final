<template>
  <app-layout title="Empleados">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Empleados
      </h2>
    </template>


  <!-- boton empleado -->
   <button
      v-if="tpAccion == 0"
      @click="nuevoE"
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
      Nuevo Empleado
    </button>
 
 <!-- menu principal empleados -->
    
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
                <th class="py-3 px-6 text-left">Nombre </th>
                <th class="py-3 px-6 text-left">Telefono</th>
                <th class="py-3 px-6 text-center">Cargo</th>
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
                    <span class="font-medium" v-text="objeto.nombre_empleado"></span>
                  </div>
                </td>


                  <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium">{{ objeto.telefono_empleado }}</span>
                  </div>
                </td>

                <td class="py-3 px-6">
                  <div class="flex items-center">
                    <span class="font-medium">{{ objeto.nombre_cargo }}</span>
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
                      @click="editarEmpleado(objeto)"
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
                      @click="eliminarEmpleado(objeto)"
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
          

           <!-- mformulario empleados -->
          <div>
            <div class="w-full max-w-m" v-if="tpAccion==1">
              <p class="font-semibold text-gray-2000" v-text="titulo"></p>
              <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="Nombre empleado"
                  >
                    Nombre empleado
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
                    v-model="nombreEmpleado"
                    type="text"
                    placeholder="Digite su nombre"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="telefeno"
                  >
                    Telefono
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
                    v-model="telefonoEmpleado"
                    type="number"
                    placeholder="Digite su numero de telefono"
                  />
                </div>

                <div class="mb-4">
                  <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="cargo"
                  >
                    Cargo
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
                    v-model="cargoEmpleado"
                    type="text"
                    placeholder="Digite su cargo"
                  />
                </div>

               <div class="flex flex-row items-center justify-end p-5 bg-white border-gray-200">
                
                     <div class="flex items-center justify-between">
                       <button
                   v-if="opcBoton == false"
                     type="button"
                      @click="actualizarEmpleado()"
                          class="
                       bg-blue-500
                     hover:bg-blue-700
              text-white
              font-bold
              py-2
              px-4
              mr-5
              rounded
              focus:outline-none focus:shadow-outline
            "
          >
            Actualizar
          </button>

          
            <button
              type="button"
              @click="cerrarE()"
              class="
                bg-gray-500
                hover:bg-black-700
                text-white
                font-bold
                py-2
                px-4
                mr-5
                rounded
                focus:outline-none focus:shadow-outline
              "
            >
              Cerrar
            </button>
          

            <button
            v-if="opcBoton==true"
                  type="button"
                   @click="regEmpleados()"
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
                </div>
              </form>
            </div>
          </div>
      
      <!-- mensaje eliminar -->
      
      <div>
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
              @click="destroyEmpleado"
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
              @click="cerrarE"
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
  // props:["Empleados"],

  data() {
    return {

      tpAccion:0,
      idEmpleado:0,
      nombreEmpleado: "",
      telefonoEmpleado: "",
      cargoEmpleado: "",
        arrayData: [],
        modal:false,
        titulo:"",
        opcBoton:true,
        nomEmpleado:"",

    };
  },
  // props: ["empleado"],

  methods: {
    listarDatos() {
      let me = this;
      var url = "/api/empleado/data";

      axios
        .get(url)
        .then(function (response) {
          var result = response.data;
          me.arrayData = result.Empleados;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
   

    regEmpleados() {
      let me = this;
      var url = "/api/empleado/registrar";
      axios
        .post(url, {
          nombreEmpleado: this.nombreEmpleado,
          telefonoEmpleado: this.telefonoEmpleado,
          cargoEmpleado: this.cargoEmpleado,
        })
        .then(function (response) {
           me.cerrarE();
          alert("registro guardado exitosamente");
       
          this.listarDatos();
          
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },
     actualizarEmpleado() {
      let me = this;
      var url = "/api/empleado/actualizar";
      axios
        .put(url, {
          id: this.idEmpleado,
            nombreEmpleado: this.nombreEmpleado,
          telefonoEmpleado: this.telefonoEmpleado,
          cargoEmpleado: this.cargoEmpleado,
         
        })
        .then(function (response) {
            me.cerrarE();
          alert("registro actualizado exitosamente");

          this.listarDatos();
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },

  editarEmpleado(data = []) {
      this.tpAccion = 1;
      this.opcBoton = false;
      this.titulo = "Actualizar  empleado";

      this.idEmpleado = data["id"];
      this.nombreEmpleado = data["nombre_empleado"];
      this.telefonoEmpleado = data["telefono_empleado"];
      this.cargoEmpleado = data["nombre_cargo"];
     
    },

      destroyEmpleado() {
      let me = this;
      var url = "/api/empleado/eliminar";
      axios
        .post(url, {
          id: this.idEmpleado,
        })
        .then(function (response) {
          me.listarDatos();

          alert("eliminado exitosamente");
          me.cerrarE();
        })
        .catch(function (error) {
          console.log(error);
        });
    },


    eliminarEmpleado(data = []) {
      this.tpAccion = 2;
      this.idEmpleado = data["id"];
      this.nomEmpleado = data["nombre"];
      this.title = "";

      
    },

      nuevoE() {
      this.tpAccion = 1;
      this.titulo = "Registro nuevo empleado";
    },
    cerrarE() {
      this.tpAccion = 0;
      location.reload();
    },

  
  },
  mounted() {
    this.listarDatos();
  },
});
</script>
