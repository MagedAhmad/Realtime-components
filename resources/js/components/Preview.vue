<template>
    <div>
        <iframe>
        </iframe>
    </div>
</template>
<script>
    import { EventBus } from '../event-bus.js';

    export default {
        data() {
            return {
                iframe : ''
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.iframe = document.querySelector("iframe")
        },
        created() {
            EventBus.$on('changed', (data) => {
                this.iframe.src = "data:text/html;charset=utf-8," + encodeURI(data);
            })
        },
    }
</script>
