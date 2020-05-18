<template>
    <div>
        <div class="code" v-on:keyup="changed">
            
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
               data: '',
               editor: '',
            }
        },
        mounted() {
            this.editor = codemirror(document.getElementsByClassName('code')[0], {
                value: "",
                lineNumbers: true,
                matchBrackets: true,
                mode: "html",
                theme: "dracula",
            });
        },
         methods: {
            changed() {
                this.data = this.editor.getValue();
                this.$emit('changed', this.data);
            }
        }
    }
</script>
