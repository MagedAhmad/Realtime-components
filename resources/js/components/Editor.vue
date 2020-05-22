<template>
    <div>
        <div class="code" v-on:keyup="changed"></div>
    </div>
</template>
<script>
    import { EventBus } from '../event-bus.js';

    export default {
        props: [
            'body'
        ],
        data() {
            return {
               data: '',
               editor: '',
            }
        },
        mounted() {
            this.editor = codemirror(document.getElementsByClassName('code')[0], {
                value: this.body ? this.body : '',
                matchBrackets: true,
                theme: "dracula",
                origLeft: null,
                mode: 'htmlmixed',
                lineNumbers: true,
                collapseIdentical: false,
                highlightDifferences: true
            });
        },
         methods: {
            changed() {
                this.data = this.editor.getValue();
                EventBus.$emit('changed', this.data);
            }
        }
    }
</script>
