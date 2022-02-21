<template>
  <app-layout title="Cliente">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cliente</h2>
    </template>

    <button
      v-if="tpAccion == 0"
      @click="nuevoC"
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
      Nuevo Cliente
    </button>

    <!-- menu principal de clientes -->
    <div>
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
                  <th class="py-3 px-6 text-left">Nombre</th>
                  <th class="py-3 px-6 text-left">Cedula</th>
                  <th class="py-3 px-6 text-center">Telefono</th>
                  <th class="py-3 px-6 text-center">Correo electronico</th>
                  <th class="py-3 px-6 text-center">Genero</th>
                  <th class="py-3 px-6 text-center">Direccion</th>
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
                      <span
                        class="font-medium"
                        v-text="objeto.nombre_cliente"
                      ></span>
                    </div>
                  </td>

                  <td class="py-3 px-6">
                    <div class="flex items-center">
                      <span class="font-medium">{{
                        objeto.cedula_cliente
                      }}</span>
                    </div>
                  </td>

                  <td class="py-3 px-6">
                    <div class="flex items-center">
                      <span class="font-medium">{{
                        objeto.telefono_cliente
                      }}</span>
                    </div>
                  </td>

                  <td class="py-3 px-6">
                    <div class="flex items-center">
                      <span class="font-medium">{{
                        objeto.email_cliente
                      }}</span>
                    </div>
                  </td>

                  <td class="py-3 px-6">
                    <div class="flex items-center">
                      <span class="font-medium">{{
                        objeto.genero_cliente
                      }}</span>
                    </div>
                  </td>

                  <td class="py-3 px-6">
                    <div class="flex items-center">
                      <span class="font-medium">{{
                        objeto.direccion_cliente
                      }}</span>
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
                        @click="editarCliente(objeto)"
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
                        @click="eliminarCliente(objeto)"
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
    </div>

    <!-- formulario clientes -->
    <div>
      <div class="w-full max-w-m" v-if="tpAccion == 1">
        <p class="font-semibold text-gray-2000" v-text="titulo"></p>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="Nombre cliente"
            >
              Nombre cliente
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
              v-model="nombreCliente"
              type="text"
              placeholder="Digite su nombre"
            />
          </div>

          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="cedula"
            >
              Cedula
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
              v-model="cedulaCliente"
              type="number"
              placeholder="Digite su numero de cedula"
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
              v-model="telefonoCliente"
              type="number"
              placeholder="Digite su numero de telefono"
            />
          </div>

          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="correo"
            >
              Correo electronico
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
              v-model="emailCliente"
              type="email"
              placeholder="Digite su correo electronico"
            />
          </div>

          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="genero"
            >
              Genero
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
              v-model="generoCliente"
              type="text"
              placeholder="Digite su genero"
            />
          </div>

          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="direccion"
            >
              Dirección
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
              v-model="direccionCliente"
              type="text"
              placeholder="Digite su Dirección"
            />
          </div>

          <div
            class="
              flex flex-row
              items-center
              justify-end
              p-5
              bg-white
              border-gray-200
            "
          >
            <div class="flex items-center justify-between">
              <button
                v-if="opcBoton == false"
                type="button"
                @click="actualizarClientes()"
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
                @click="cerrarC()"
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
              v-if="opcBoton== true"
                type="button"
                @click="regClientes()"
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
                  Desea eliminar el cliente ? {{ nomCliente }}
                </div>
                <p class="text-sm text-gray-600 leading-none mt-1">
                  Este proceso no es reversible
                </p>
              </div>
            </div>
            <button
              @click="destroyCliente"
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
              @click="cerrarC"
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
  // props:["Clientes"],

  data() {
    return {
      tpAccion: 0,
      idCliente: 0,
      cedulaCliente: "",
      nombreCliente: "",
      telefonoCliente: "",
      emailCliente: "",
      generoCliente: "",
      direccionCliente: "",
      arrayData: [],
      modal: false,
      titulo: "",
      opcBoton: true,
      nomCliente: "",
    };
  },
  //props:["Clientes"],

  methods: {
    listarDatos() {
      let me = this;
      var url = "/api/cliente/data";

      axios
        .get(url)
        .then(function (response) {
          var resultado = response.data;
          me.arrayData = resultado.clientes;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

  

    regClientes() {
      let me = this;
      var url = "/api/cliente/registrar";
      axios
        .post(url, {
          cedulaCliente: this.cedulaCliente,
          nombreCliente: this.nombreCliente,
          telefonoCliente: this.telefonoCliente,
          emailCliente: this.emailCliente,
          generoCliente: this.generoCliente,
          direccionCliente: this.direccionCliente,
        })
        .then(function (response) {
          me.cerrarC();
          alert("registro guardado exitosamente");
          this.listarDatos();
          
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },

    actualizarClientes() {
      let me = this;
      var url = "/api/cliente/actualizar";
      axios
        .put(url, {
          id: this.idCliente,
          cedulaCliente: this.cedulaCliente,
          nombreCliente: this.nombreCliente,
          telefonoCliente: this.telefonoCliente,
          emailCliente: this.emailCliente,
          generoCliente: this.generoCliente,
          direccionCliente: this.direccionCliente,
        })
        .then(function (response) {
          me.cerrarC();
          alert("registro actualizado exitosamente");

          this.listarDatos();
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },

    editarCliente(data = []) {
      this.tpAccion = 1;
      this.opcBoton = false;
      this.titulo = "Actualizar cliente";

      this.idCliente = data["id"];

      this.cedulaCliente = data["cedula_cliente"];
      this.nombreCliente = data["nombre_cliente"];
      this.telefonoCliente = data["telefono_cliente"];
      this.emailCliente = data["email_cliente"];
      this.generoCliente = data["genero_cliente"];
      this.direccionCliente = data["direccion_cliente"];
    },

    destroyCliente() {
      let me = this;
      var url = "/api/cliente/eliminar";
      axios
        .post(url, {
          id: this.idCliente,
        })
        .then(function (response) {
          me.listarDatos();

          alert("eliminado exitosamente");
          me.cerrarC();
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    eliminarCliente(data = []) {
      this.tpAccion = 2;
      this.idCliente = data["id"];
      this.nomCliente = data["nombre_cliente"];
      this.title = "";
    },

    nuevoC() {
      this.tpAccion = 1;
      this.titulo = "Registro nuevo cliente";
    },

    cerrarC() {
      location.reload();
      this.tpAccion = 0;
    },

    verlistado() {
      let me = this;
      var url = "/api/cliente/data";
      axios
        .get(url, {
          id: this.idProducto,
          cedulaCliente: this.cedulaCliente,
          nombreCliente: this.nombreCliente,
          telefonoCliente: this.telefonoCliente,
          emailCliente: this.emailCliente,
          generoCliente: this.generoCliente,
          direccionCliente: this.direccionCliente,
        })
        .then(function (response) {
          me.listarDatos();
        });
    },

    observarlista(data = []) {
      this.cedulaCliente = data["cedulaCliente"];
      this.nombreCliente = data["nombreCliente"];
      this.telefonoCliente = data["telefonoCliente"];
      this.emailCliente = data["emailCliente"];
      this.generoCliente = data["generoCliente"];
      this.direccionCliente = data["direccionCliente"];
    },
  },
  mounted() {
    this.listarDatos();
  },
});
</script>
 