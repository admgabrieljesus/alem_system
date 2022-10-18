<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuários
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="name"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Nome</label
                                        >
                                        <input
                                            type="text"
                                            v-model="form.name"
                                            name="name"
                                            id="name"
                                            autocomplete="given-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="email"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Email</label
                                        >
                                        <input
                                            type="text"
                                            v-model="form.email"
                                            name="email"
                                            id="email"
                                            autocomplete="family-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="password"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Senha</label
                                        >
                                        <input
                                            type="password"
                                            v-model="form.password"
                                            name="password"
                                            id="password"
                                            autocomplete="family-name"
                                            class="
                                                mt-1
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                shadow-sm
                                                sm:text-sm
                                                border-gray-300
                                                rounded-md
                                            "
                                        />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            for="role_id"
                                            class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            "
                                            >Grupo</label
                                        >
                                        <select
                                            id="role_id"
                                            v-model="form.role_id"
                                            name="role_id"
                                            autocomplete="role_id"
                                            class="
                                                mt-1
                                                block
                                                w-full
                                                py-2
                                                px-3
                                                border border-gray-300
                                                bg-white
                                                rounded-md
                                                shadow-sm
                                                focus:outline-none
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                sm:text-sm
                                            "
                                        >
                                            <option value="1">Admin</option>
                                            <option value="2">Operator</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-4 py-3 bg-gray-50 text-right sm:px-6"
                            >
                                <button
                                    type="submit"
                                    class="
                                        inline-flex
                                        justify-center
                                        py-2
                                        px-4
                                        border border-transparent
                                        shadow-sm
                                        text-sm
                                        font-medium
                                        rounded-md
                                        text-white
                                        bg-indigo-600
                                        hover:bg-indigo-700
                                        focus:outline-none
                                        focus:ring-2
                                        focus:ring-offset-2
                                        focus:ring-indigo-500
                                    "
                                >
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
    components: {
        AppLayout,
    },
    props: {
        errors: Object,
    },
    data() {
        return {
            form: this.$inertia.form({
                name: "",
                email: "",
                password: "",
                role_id: "",
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("users.store"), {
                onFinish: () =>
                    this.form.reset("password", "password_confirmation"),
            });
        },
    },
});
</script>
