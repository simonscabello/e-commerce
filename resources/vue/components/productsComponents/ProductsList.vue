<template>
    <section class="products-list">
        <CardProduct
            v-for="product in products"
            :key="product.id"
            :product-url="product.url"
            :product-name="product.name"
            :product-price="product.price"
            :brand-name="product.brand"
            class="products-list__item"
            @event="openProductPage(product)"
        />
    </section>
</template>

<script>
import CardProduct from '../common/CardProduct.vue'
import { mapActions } from 'vuex'

export default {
    name: "ProductsList",

    data() {
        return {
            products: [],
        };
    },

    components: {
      CardProduct,
    },

    mounted() {
        window.axios.get('/api/products').then(res => {
            this.products = res.data
        })
    },

    methods: {
      ...mapActions([
        'productSelected',
      ]),

      openProductPage(product) {
        this.productSelected(product)

        this.$router.replace({ name: 'SingleProduct', params: { id: product.id } });
      }
    }
};
</script>

<style lang="scss" scoped>
.products-list {
  display: grid;
  grid-template-columns: 1fr;

  @media screen and (min-width: 1024px) {
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin: 1rem 3rem;
  }

  &__item {
    transition: all 0.4s ease;
    opacity: 0.75;
    cursor: pointer;

    &:hover {
      opacity: 1;
      transform: scale(1.1);
    }
  }
}
</style>
