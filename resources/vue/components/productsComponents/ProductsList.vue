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
            @event="openProductPage(product.id)"
        />
    </section>
</template>

<script>
import CardProduct from '../common/CardProduct.vue'

export default {
    name: "ProductsList",

    data() {
        return {
            products: [
                {
                  id: 1,
                  url: "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp",
                  name: "SUNGLASSES SYMPHONY",
                  price: "254,00",
                  brand: "White",
                  class: "carousel-item active",
                },
                {
                  id: 2,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/04/07/16493031694f855682d655eb04dea10c3e5fa68a5d_thumbnail_600x.webp",
                    name: "CRAZY SUNGLASSES",
                    price: "158,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 3,
                    url: "https://img.ltwebstatic.com/images3_pi/2021/07/01/162513527687b7c6dbb36d7007ee8a0e17b11ee5f6_thumbnail_600x.webp",
                    name: "MASON SUNGLASSES",
                    price: "175,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 4,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp",
                    name: "SUNGLASSES SYMPHONY",
                    price: "254,00",
                    brand: "White",
                    class: "carousel-item active",
                },
                {
                  id: 5,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/04/07/16493031694f855682d655eb04dea10c3e5fa68a5d_thumbnail_600x.webp",
                    name: "CRAZY SUNGLASSES",
                    price: "158,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 6,
                    url: "https://img.ltwebstatic.com/images3_pi/2021/07/01/162513527687b7c6dbb36d7007ee8a0e17b11ee5f6_thumbnail_600x.webp",
                    name: "MASON SUNGLASSES",
                    price: "175,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 7,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp",
                    name: "SUNGLASSES SYMPHONY",
                    price: "254,00",
                    brand: "White",
                    class: "carousel-item active",
                },
                {
                  id: 8,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/04/07/16493031694f855682d655eb04dea10c3e5fa68a5d_thumbnail_600x.webp",
                    name: "CRAZY SUNGLASSES",
                    price: "158,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 9,
                    url: "https://img.ltwebstatic.com/images3_pi/2021/07/01/162513527687b7c6dbb36d7007ee8a0e17b11ee5f6_thumbnail_600x.webp",
                    name: "MASON SUNGLASSES",
                    price: "175,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 10,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp",
                    name: "SUNGLASSES SYMPHONY",
                    price: "254,00",
                    brand: "White",
                    class: "carousel-item active",
                },
                {
                  id: 11,
                    url: "https://img.ltwebstatic.com/images3_pi/2022/04/07/16493031694f855682d655eb04dea10c3e5fa68a5d_thumbnail_600x.webp",
                    name: "CRAZY SUNGLASSES",
                    price: "158,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
                {
                  id: 12,
                    url: "https://img.ltwebstatic.com/images3_pi/2021/07/01/162513527687b7c6dbb36d7007ee8a0e17b11ee5f6_thumbnail_600x.webp",
                    name: "MASON SUNGLASSES",
                    price: "175,00",
                    brand: "Green Marl",
                    class: "carousel-item",
                },
            ],
        };
    },

    components: {
      CardProduct,
    },

    methods: {
      openProductPage(id) {
        this.$router.replace({ name: 'SingleProduct', params: { id: id } });
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
