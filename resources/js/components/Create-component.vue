<template>
    <div>
        <form action="#" @submit.prevent="createComponent()">
            <input type="text" v-model="name">
            <textarea name="description" cols="30" rows="10" v-model="description"></textarea>
            <editor></editor>
            <button type="submit">Create Component</button>
        </form>
    </div>
</template>
<script>
    import axios from 'axios'
    import { EventBus } from '../event-bus.js'

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
                axios.post('/component', {name: this.name,description: this.description, body: this.body })
                    .then((response) => {
                        window.location.href = '/component/' + response.data.slug;
                    }).catch((error) => {
                        console.log(error)
                    });
                EventBus.$off()
            },
            
        },
        created() {
            EventBus.$on('changed', (data) => {
                this.body = data;
            })
        },
    }
</script>
