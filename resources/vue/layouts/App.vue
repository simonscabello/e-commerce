<template>
    <div>
        <Header />
            <router-view />
        <Footer />
    </div>
</template>

<script>
    import Header from '../components/common/headerComponent.vue'
    import Footer from '../components/common/footerComponent.vue'

    export default {
        name: 'Home',

        components: {
            Header,
            Footer,
        }
    }
</script>
