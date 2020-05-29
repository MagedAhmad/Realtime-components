<template>
    <div class="relative my-2">
        <select class="bg-gray-200 text-black w-full p-2">
            <option v-on:click="chooseFrame('')">Choose CSS framework</option>
            <option v-on:click="chooseFrame('tailwindcss')">TailwindCSS</option>
            <option v-on:click="chooseFrame('bootstrap')">Bootstrap</option>
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
                ['tailwindcss', '<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"><br>'],
                ['bootstrap', '<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"><br>']
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
        chooseFrame(data) {
            this.isOpen = false
            this.frameworks.forEach(element => {
                if(element[0] == data)
                    data = element[1]
            });
            EventBus.$emit('framework', data)
        },
    }
}
</script>
