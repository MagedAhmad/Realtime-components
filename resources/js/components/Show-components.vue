<template>
    <div>
        <div v-for="component in data" :key="component.id">
                {{ component.name }}
                <preview :body="component.body"></preview>
		</div>
    </div>
</template>

<script>

export default {
    props: [
        'data'
    ],
}
</script>