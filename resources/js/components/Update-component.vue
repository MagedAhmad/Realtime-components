<template>
    <div>
        <form action="#" @submit.prevent="updateComponent()">
            <input type="text" v-model="name">
            <textarea v-model="description" cols="30" rows="10"></textarea>
            <editor v-bind:body="component.body"></editor>
            <button type="submit">Update Component</button>
        </form>
    </div>
</template>


<script>    
import { EventBus } from '../event-bus.js';

export default {
    props: [
        'component'
    ],
    data() {
        return {
            name: this.component.name,
            description : this.component.description,
            body: this.component.body
        }
    },
    methods: {
        updateComponent() {
            axios.patch('/component/' + this.component.slug, {
                name : this.name,
                description : this.description,
                body : this.body
            }).then((response) => {
                window.location.href = '/component/' + response.data.slug;
            }).catch((error) => {
                console.log(error)
            });
        }
    }, 
    created() {
        EventBus.$on('changed', (data) => {
            this.body = data;
        })
    }
}
</script>