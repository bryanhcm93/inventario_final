<template>
    <app-layout title="Ventas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ventas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

          <!-- linea ingresada por mi            -->
                    <h1 v-for="(objeto,index) in Ventas" :key="index">
                        {{objeto.nombre}}
                                    

                    </h1>
                   
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
        props:["Ventas"],
    })
</script>
