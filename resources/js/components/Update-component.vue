<template>
    <div>
        <form action="#"  @submit.prevent="updateComponent()">
            <div class="flex flex-col md:flex-row">
                <!-- left side -->
                <div class="py-8 pr-4 w-full md:w-1/2 text-gray-300">
                        <div class="flex flex-col">
                            <label for="">Component name</label>
                            <input type="text" name="name" v-model="name" class="p-4 text-gray-700 my-2 border border-gray-300 rounded-lg focus:outline-none bg-gray-200  focus:border-gray-400" placeholder="Enter component name">
                            <label for="">Component Description</label>
                            <textarea v-model="description" class="autoexpand text-gray-700 tracking-wide py-2 px-4  my-2 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    id="message" type="text" placeholder="Message..."></textarea>
                            <div class="flex">
                                <input type="checkbox" class="mr-2"> Private
                            </div>
                        </div>
                        <button type="submit" class="bg-gray-800 hover:bg-orange-500 hover:text-white border border-orange-500 rounded text-orange-500 p-2 my-2">Submit</button>
                </div>
                <!-- end of left side -->
                <!-- right side -->
                <div class="py-8 w-full md:w-1/2 min-h-full text-gray-300 ">
                    <div style="height: 300px" class="bg-blue-100 overflow-hidden rounded-lg relative">
                        <!-- editor component goes here -->
                        <editor v-bind:body="component.body"></editor>
                    </div>
                </div>
                <!-- end of right side -->
            </div>
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