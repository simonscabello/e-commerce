<template>
    <div>
        <Header />
        <HomePhotos />
        <HomeProducts />
    </div>
</template>

<script>
    import Header from './homeComponents/headerComponent.vue'
    import HomePhotos from './homeComponents/HomePhotos.vue'
    import HomeProducts from './homeComponents/HomeProducts.vue'

    export default {
        components: {
            Header,
            HomePhotos,
            HomeProducts,
        }
    }
</script>
