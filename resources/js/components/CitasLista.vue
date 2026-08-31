<template>
    <div class="citas-container">
        <h2>Próximas Citas</h2>
        <ul>
            <li v-for="cita in citas" :key="cita.id">
                {{ cita.fecha_hora }} - Estado: {{ cita.estado }}
            </li>
        </ul>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const citas = ref([]);

onMounted(async () => {
    const respuesta = await fetch('/api/citas');
    citas.value = await respuesta.json();
});
</script>