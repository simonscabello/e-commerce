<template>
    <div class="single-product">
        <img
          :src="product.url"
          alt="Óculos de sol"
          class="single-product__img"
        />
        <section class="single-product__details">
            <div class="single-product__details__text">
              <h1 class="single-product__details__text--title">
              {{ product.name }}
              </h1>
              <p class="single-product__details__text--brand">
                {{ product.brand }}
              </p>
            </div>

            <div class="single-product__details__btn-group">
              <Button
                btnText="COMPRAR"
                :btnPrice="product.price"
                buyBtn
                class="single-product__details__btn-group__btn"
                @btnEvent="addToCart()"
              />
              <router-link
                :to="{ name: 'cart' }"
                class="single-product__details__btn-group__link"
              >
                <Button
                  v-if="cartLength"
                  btnText="VER CARRINHO"
                  :btnPrice="product.price"
                  class="single-product__details__btn-group__btn"
                />
              </router-link>
            </div>

            <p class="single-product__details__description">
              {{ product.description }}
            </p>
        </section>
    </div>
</template>

<script>
import Button from '../../components/common/Button.vue'
import { mapActions, mapGetters } from 'vuex'

export default {
    name: "SingleProduct",

    components: {
      Button,
    },

    data() {
      return {
        product: {},
      };
    },

    created() {
      this.product = this.chosenProduct;
    },

    computed: {
      ...mapGetters([
        'cartLength',
        'chosenProduct'
      ])
    },

    methods: {
      ...mapActions([
        'setCart',
      ]),

      addToCart() {
        this.setCart(this.product)
      },
    }
};
</script>

<style lang="scss" scoped>
.single-product {
  display: flex;
  align-items: flex-start;
  justify-content: space-evenly;
  margin: 0rem 5rem;
  gap: 3rem;

  @media screen and (max-width: 768px) {
    flex-direction: column;
    margin: 0;
    gap: 1rem;
  }

  &__img {
    width: 450px;
  }

  &__details {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: flex-start;
    margin-top: 3rem;
    gap: 3rem;

    @media screen and (max-width: 768px) {
      margin: 0 1rem;
    }

    &__text {
      &--title {
        font-size: 1.5rem;
        margin: 0;
        font-weight: 700;
      }
    }

    &__btn-group {
      gap: 0.5rem;
      display: flex;
      flex-direction: column;

      &__link {
        text-decoration: none;
        transition: all 0.2s ease;
      }
    }
  }
}
</style>
