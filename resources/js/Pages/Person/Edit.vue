<template>
    <div></div>
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
        user: Object,
    },
    data() {
        return {
            form: this.$inertia.form({
                id: this.user.id,
                name: this.user.name,
                email: this.user.email,
                role_id: this.user.role_id,
            }),
        };
    },

    methods: {
        submit() {
            this.form.put(this.route("users.update", this.user.id), {
                onFinish: () => this.form.reset("password"),
            });
        },
    },
});
</script>
