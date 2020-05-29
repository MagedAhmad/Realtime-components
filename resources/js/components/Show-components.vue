<template>
    <div class="flex-1 grid grid-column gap-8 py-8">
        <a v-for="component in data" :key="component.id" class="flex flex-col rounded overflow-hidden hover:opacity-75" :href="'/component/' + component.slug">
            <div class="h-48 xl:h-64 bg-blue-100 overflow-hidden rounded-lg relative">
                <img loading="lazy" class="w-full h-full" :src="component.image">
            </div>
            <div class="mt-3">
                <div class="flex">
                    <div class=" text-center rounded-full border-solid border-2 border-orange-500 h-8 w-8 flex-shrink-0 mr-3 mt-1 overflow-hidden shadow-inner relative">
                        <i class="fa fa-user text-white"></i>
                        <!-- <img loading="lazy" src="https://avatars1.githubusercontent.com/u/42153098?v=4" class="absolute inset-0 z-negative w-full h-full"> -->
                        <!-- <preview :body="component.body"></preview> -->
                    </div>
                    <div class="flex-1 leading-snug w-0">
                        <h4 class="hover:text-orange-500 text-gray-200 whitespace-no-wrap text-secondary font-bold truncate hover:text-primary">{{ component.name }}</h4>
                        <p class="text-sm text-gray-500">{{ component.user.name }}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

</template>

<script>

export default {
    props: [
        'data'
    ],
}
</script>

