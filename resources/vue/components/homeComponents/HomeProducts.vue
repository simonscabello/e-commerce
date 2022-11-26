<template>
    <div class="home-products">
        <div class="home-products__container">
            <div class="home-products__container__redirect">
                <p>
                    NOVIDADES
                </p>
                <router-link
                  class="home-products__container__redirect--btn"
                  :to="{ name: 'products' }"
                >
                    <Button btn-text="CONFIRA OS LANÇAMENTOS" />
                </router-link>
            </div>
            <div
              id="carouselExampleFade"
              :class="[ isMobile ? 'carousel slide carousel-fade w-100' : '']"
              data-bs-ride="carousel"
            >
                <div :class="[ isMobile ? 'carousel-inner' : 'home-products__container__cards' ]">
                    <CardProduct
                        v-for="product in products"
                        :key="product.id"
                        :product-url="product.url"
                        :product-name="product.name"
                        :product-price="product.price"
                        :brand-name="product.brand"
                        :width="[ isMobile ? '100%' : '300px']"
                        :class="[ isMobile ? `${product.class}` : '' ]"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CardProduct from '../common/CardProduct.vue'
    import Button from '../common/Button.vue'

    export default {
        name: "HomeProducts",

        components: {
            CardProduct,
            Button
        },

        data() {
            return {
                products: [
                    {
                      url: 'https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp',
                      name: 'SUNGLASSES SYMPHONY',
                      price: '254,00',
                      brand: 'White',
                      class: 'carousel-item active'
                    },
                    {
                      url: 'https://img.ltwebstatic.com/images3_pi/2022/04/07/16493031694f855682d655eb04dea10c3e5fa68a5d_thumbnail_600x.webp',
                      name: 'CRAZY SUNGLASSES',
                      price: '158,00',
                      brand: 'Green Marl',
                      class: 'carousel-item'
                    },
                    {
                      url: 'https://img.ltwebstatic.com/images3_pi/2021/07/01/162513527687b7c6dbb36d7007ee8a0e17b11ee5f6_thumbnail_600x.webp',
                      name: 'MASON SUNGLASSES',
                      price: '175,00',
                      brand: 'Green Marl',
                      class: 'carousel-item'
                    },
                ],
                isMobile: false,
                width: window.screen.width,
            }
        },

        created() {
          this.$nextTick(() => {
            window.addEventListener('resize', this.onResize);
          });
        },

        methods: {
          onResize() {
            this.width = window.screen.width;

            if (this.width < 1024) {
              this.isMobile = true;
            } else {
              this.isMobile = false;
            }
          }
        }
    }
</script>

<style lang="scss" scoped>
.home-products {
    &__container {
        display: flex;
        align-items: center;
        gap: 1rem;
        justify-content: flex-end;

        &__redirect {
          display: none;

           @media screen and (min-width: 768px) {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 500;
          }

          &--btn {
            text-decoration: none;
          }
        }

        &__cards {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
    }
}
</style>