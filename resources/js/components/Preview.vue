<template>
    <div>
        
        <editor @changed="showChanges"></editor>
        <iframe>
            
        </iframe>
    </div>
</template>
<script>
    import editor from './Editor.vue';
    export default {
        components: { editor },
        data() {
            return {
                iframe : ''
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.iframe = document.querySelector("iframe")
        },
        methods: {
            showChanges(comming) {
                var html = comming;
                this.iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
            }
        }
    }
</script>
