<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Relatórios
            </h2>
        </template>

        <div class="py-12 px-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 block">
                <div class="mb-4 w-full">
                    <a href="#"> Membros por Idade </a>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
    components: {
        AppLayout,
        Head,
        Link,
    },
});
</script>

<style></style>
