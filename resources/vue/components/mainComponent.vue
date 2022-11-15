<template>
    <div>
        <Header />
        <HomePhotos />
        <HomeProducts />
        <Footer />
    </div>
</template>

<script>
    import Header from './common/headerComponent.vue'
    import HomePhotos from './homeComponents/HomePhotos.vue'
    import HomeProducts from './homeComponents/HomeProducts.vue'
    import Footer from './common/footerComponent.vue'

    export default {
        components: {
            Header,
            HomePhotos,
            HomeProducts,
            Footer,
        }
    }
</script>
