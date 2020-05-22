<template>
    <div>
        <iframe sandbox>
        </iframe>
    </div>
</template>
<script>
    import { EventBus } from '../event-bus.js';
    
    export default {
        props:[
            'body'
        ],
        data() {
            return {
                iframe : '',
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.iframe = document.querySelector("iframe")
            
            if(this.body != '')
                this.iframe.src = "data:text/html;charset=utf-8," + encodeURI(this.body)
            if(this.body == undefined) 
                this.iframe.src = "data:text/html;charset=utf-8," + encodeURI(' ')

        },
        created() {
            EventBus.$on('changed', (data) => {
                this.iframe.src = "data:text/html;charset=utf-8," + encodeURI(data);
            })
        },
    }
</script>
