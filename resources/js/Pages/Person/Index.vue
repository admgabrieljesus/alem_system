<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Membros
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 block">
                <div class="mb-4 w-full">
                    <input
                        class="
                            focus:ring-indigo-500 focus:border-indigo-500
                            shadow-sm
                            m-2
                            sm:text-sm
                            border-gray-300
                            rounded-md
                        "
                        type="text"
                        v-model="term"
                    />
                    <button
                        class="px-6 py-2 mb-2 text-black bg-yellow-300 rounded"
                        @click="search"
                    >
                        Pesquisar
                    </button>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Nome
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Email
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    TELEFONES
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    NASCIMENTO (idade)
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    ADMISSÃO (tempo)
                                </th>
                                <th scope="col" class="relative px-2 py-1">
                                    <span class="sr-only">Ações</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="person in persons.data" :key="person.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-2">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                {{ person.name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <ul id="example-1">
                                            <li
                                                v-for="item in person.emails"
                                                :key="item.message"
                                            >
                                                {{ item.url }}
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <ul id="example-1">
                                            <li
                                                v-for="item in person.phones"
                                                :key="item.message"
                                            >
                                                +{{ item.ddi }} ({{ item.ddd }})
                                                {{ item.number }}
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-2">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                {{ formatDate(person.birth) }}
                                                <br />
                                                {{ calcAge(person.birth) }}
                                                anos
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-2">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                {{
                                                    formatDate(
                                                        person.acceptance
                                                    )
                                                }}<br />
                                                {{ calcAge(person.acceptance) }}
                                                anos
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="
                                        px-6
                                        py-4
                                        whitespace-nowrap
                                        text-right text-sm
                                        font-medium
                                    "
                                >
                                    <Link
                                        class="
                                            px-2
                                            py-1
                                            mb-1
                                            text-white
                                            bg-green-600
                                            rounded
                                        "
                                        :href="route('persons.edit', person.id)"
                                    >
                                        Alterar
                                    </Link>
                                    <Link
                                        @click="destroy(person.id)"
                                        class="
                                            px-2
                                            py-1
                                            mb-1
                                            ml-1
                                            text-white
                                            bg-red-500
                                            rounded
                                        "
                                        >Excluir</Link
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <pagination :data="persons" />
                </div>
                <div class="mt-4">
                    <Link
                        class="px-6 py-2 mt-8 text-white bg-blue-600 rounded"
                        :href="route('persons.create')"
                    >
                        Incluir Usuário
                    </Link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Pagination from "../../Shared/Pagination.vue";

export default defineComponent({
    components: {
        AppLayout,
        Link,
        Head,
        Pagination,
    },
    data() {
        return {
            term: "",
        };
    },
    props: {
        persons: Object,
    },
    methods: {
        destroy(id) {
            alert("Operação não autorizada!");
            //this.$inertia.delete(route("persons.destroy", id));
        },
        search() {
            this.$inertia.get(route("persons.index", { term: this.term }));
        },
        formatDate(dateString) {
            const date = new Date(dateString);
            return new Intl.DateTimeFormat("pt-BR").format(date);
        },
        calcAge(dateString) {
            const today = new Date();
            const birth = new Date(dateString);
            var diffYears = today.getFullYear() - birth.getFullYear();
            if (
                new Date(
                    today.getFullYear(),
                    today.getMonth(),
                    today.getDate()
                ) <
                new Date(today.getFullYear(), birth.getMonth(), birth.getDate())
            )
                diffYears--;
            return diffYears;
        },
    },
});
</script>
