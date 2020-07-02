<template>
    <div>
        <div class="flex flex-col md:flex-row">
            <!-- left side -->
            <div class="py-8 pr-4 w-full md:w-1/2 text-gray-300">
                <form action="#" @submit.prevent="createComponent()">
                    <div class="flex flex-col">
                        <label for="">Component name</label>
                        <input type="text" v-model="name" name="name" class="p-4 text-gray-700 my-2 border border-gray-300 rounded-lg focus:outline-none bg-gray-200  focus:border-gray-400" placeholder="Enter component name">
                        <label for="">CSS Framework</label>
                        <framework-selector></framework-selector>
                        <label for="">Component Description</label>
                        <textarea v-model="description" class="text-gray-700 autoexpand tracking-wide py-2 px-4  my-2 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                id="message" type="text" placeholder="Message..."></textarea>
                        <div class="flex">
                            <input type="checkbox" class="mr-2" v-model="private"> Private
                        </div>
                    </div>
                    <button type="submit" class="bg-gray-800 hover:bg-orange-500 hover:text-white border border-orange-500 rounded text-orange-500 p-2 my-2">Submit</button>

                </form>

                
            </div>
            <!-- end of left side -->
            <!-- right side -->
            <div class="py-8 w-full md:w-1/2 min-h-full text-gray-300 ">
                <div  ref="printMe" style="height: 300px" class="bg-blue-100 overflow-hidden rounded-lg relative">
                    <!-- editor component goes here -->
                    <div>
                        <editor :framework="framework"></editor>
                    </div>
                </div>
            </div>
            <!-- end of right side -->
        </div>
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
                body: '',
                private: false,
                image: null,
                framework: ''
            }
        },
        methods: {
            async createComponent() {
                const el = this.$refs.printMe;
                const options = {
                    type: 'dataURL'
                }
                this.image = await this.$html2canvas(el, options);
                axios.post('/component', {name: this.name,description: this.description, body: this.body, private: this.private, image: this.image, framework: this.framework })
                    .then((response) => {
                        Swal.fire({
                            title: 'Yaaaay!',
                            text: 'Your snippet is live and ready to be shared!',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonText: 'Snippet page',
                        }).then((result) => {
                        if (result.value) {
                            window.location.href = '/component/' + response.data.slug;
                        }
                        })
                    }).catch((error) => {
                        console.log(error)
                    });
                EventBus.$off()
            },
        },
        created() {
            EventBus.$on('changed', (data) => {
                this.body = this.framework + data;
            })

            EventBus.$on('framework', (data) => {
                this.framework = data;
                this.body = this.framework + this.body
            })
        },
    }
</script>
