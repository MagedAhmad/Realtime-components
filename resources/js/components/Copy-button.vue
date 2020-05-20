<template id="t">
  <div class="container">
    <button type="button"
    v-clipboard:copy="content"
    v-clipboard:success="onCopy"
    v-clipboard:error="onError">{{ message }}</button>
  </div>
</template>

<script>
export default {
    props: [
        'content'
    ],
    data(){
        return {
            message: 'Copy'
        }
    },
    methods: {
        onCopy: function (e) {
            this.message = "Copied"
        },
        onError: function (e) {
            console.log('Copying Failed!')
        }
    }
}
</script>