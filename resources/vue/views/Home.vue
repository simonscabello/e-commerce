<template>
    <div>
        <HomePhotos />
        <HomeProducts />
    </div>
</template>

<script>
    import HomePhotos from '../components/homeComponents/HomePhotos.vue'
    import HomeProducts from '../components/homeComponents/HomeProducts.vue'

    export default {
        name: 'Home',

        components: {
            HomePhotos,
            HomeProducts,
        }
    }
</script>
