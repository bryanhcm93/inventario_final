<template>
  <app-layout title="Empleados">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Empleados
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <!-- linea ingresada por mi            -->
          <h1 v-for="(objeto, index) in Empleados" :key="index">
            {{ objeto.nombre }}
          </h1>

          <h1>prueba empleados</h1>

          <div>
            <div class="w-full max-w-m">
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
                    v-model="nombreCargo"
                    type="text"
                    placeholder="Digite su cargo"
                  />
                </div>

               <div class="flex items-center justify-between">
                  <button
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
              </form>
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
      nombreEmpleado: "",
      telefonoEmpleado: "",
      nombreCargo: "",

      arrayData: [],
    };
  },
  props: ["empleado"],

  methods: {
    listarDatos() {
      let me = this;
      var url = "*/api/empleado/data";

      axios
        .get(url)
        .then(function (response) {
          var result = response.data;
          me.arrayData = result.empleados;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    metodo(msj) {
      alert(msj);
    },

    regEmpleados() {
      let me = this;
      var url = "/api/empleado/registrar";
      axios
        .post(url, {
          nombreEmpleado: this.nombreEmpleado,
          telefonoEmpleado: this.telefonoEmpleado,
          nombreCargo: this.nombreCargo,
        })
        .then(function (response) {
          alert("registro guardado exitosamente");
          this.listarDatos();
        })
        .catch(function (error) {
          console.log(error.message);
        });
    },

    verEmpleado() {
      alert("Boton ver ok");
    },
  },
});
</script>
