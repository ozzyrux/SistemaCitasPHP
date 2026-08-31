<template>
    <div>
        <nav style="background: #222; color: white; padding: 15px; display: flex; gap: 15px;">
            <h1 style="margin: 0; font-size: 1.2rem;">Taller Ozzy</h1>
            <button @click="vistaActual = 'lista'">Ver Citas</button>
            <button @click="vistaActual = 'formulario'">Nueva Cita</button>
        </nav>

        <main style="padding: 20px;">
            <!-- Aquí el chasis intercambia las piezas según el botón presionado -->
            <CitasLista v-if="vistaActual === 'lista'" />
            <CitaFormulario v-if="vistaActual === 'formulario'" />
        </main>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import CitasLista from './CitasLista.vue';
import CitaFormulario from './CitaFormulario.vue';

// Por defecto, arrancamos mostrando la lista
const vistaActual = ref('lista');
</script>