<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-100 text-sm font-medium leading-5 text-indigo-300 focus:outline-none focus:border-indigo-500 transition'
                    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-100 hover:text-gray-200 hover:border-gray-100 focus:outline-none focus:text-gray-100 focus:border-gray-300 transition'
            }
        }
    })
</script>
