<template>
    <div>
        <iframe sandbox :id="id">
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
                id : this.uid
            }
        },
        mounted() {
            this.iframe = document.getElementById(this.id)
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
