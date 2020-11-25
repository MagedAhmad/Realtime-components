<template>
    <div class="relative my-2">
        <select class="bg-gray-200 text-black w-full p-2" v-on:change="chooseFrame">
            <option
                v-for="f in frameworks"
                :value="f.value">
                {{f.name }}
            </option>
        </select>
    </div>
</template>

<script>
import { EventBus } from '../event-bus.js'

export default {
    data() {
        return {
           isOpen: false,
            frameworks : [ 
                {
                    "name": "Choose CSS framework",
                    "value": ''
                },
                {
                    "name": "TailwindCSS Version 1",
                    "value": '<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">\n'
                },
                {
                    "name": "TailwindCSS Version 2",
                    "value": '<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">'
                },
                {
                    "name" : "Bootstrap Version 4.5.0",
                    "value": '<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">\n'
                }
            ]
        }
    },
    created() {
        const handleEscape = (e) => {
            if (e.key === 'Esc' || e.key === 'Escape') {
                this.isOpen = false
            }
        }
        document.addEventListener('keydown', handleEscape)
        this.$once('hook:beforeDestroy', () => {
            document.removeEventListener('keydown', handleEscape)
        })
    },
    methods: {
        chooseFrame(event) {
            this.isOpen = false
            EventBus.$emit('framework', event.target.value)
        },
    }
}
</script>
