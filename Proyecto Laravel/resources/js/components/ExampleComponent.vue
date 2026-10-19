<template>
    <div class="card border-0 shadow-sm mt-3">
        <div class="card-header bg-light fw-bold">
            ⚡ Componente Vue.js Activo
        </div>
        <div class="card-body">
            <p class="mb-0">Este panel está renderizado dinámicamente utilizando Vue.js dentro de Laravel.</p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Componente Vue de Dashboard cargado correctamente.')
        }
    }
</script>
