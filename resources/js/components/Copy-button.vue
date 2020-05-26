<template id="t">
  <div class="container inline">
    <button type="button" class="bg-gray-800 hover:bg-orange-500 hover:text-white 
        border border-orange-500 rounded text-orange-500 p-2 my-2"
        v-clipboard:copy="content"
        v-clipboard:success="onCopy"
        v-clipboard:error="onError">
                <i class="fa fa-copy"></i> {{ message}}
    </button>
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