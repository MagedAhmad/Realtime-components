<template>
    <div>
        <form action="#" @submit.prevent="createComponent()">
            <input type="text" v-model="name">
            <preview @finalData="getBody"></preview>
            <textarea name="description" cols="30" rows="10" v-model="description"></textarea>
            <button type="submit">Create Component</button>
    </form>
    </div>
</template>
<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                name: '',
                description:'',
                body: ''
            }
        },
        methods: {
            createComponent() {
                axios.post('/component', {name: this.name,description: this.description, body: this.body})
                    .then((response) => {
                        window.location.href = '/component/' + response.data.slug;
                    }).catch((error) => {
                        console.log(error)
                    });
            },
            getBody(body) {
                this.body = body;
            }
        }
    }
</script>
