<template>
    <div class="home">
        <HomePhotos />
        <HomeProducts />
        <img src="../../assets/img/home-img.png" />
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

<style lang="scss" scoped>
.home {
  img {
    width: 93vw;
  }
}
</style>