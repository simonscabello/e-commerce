<template>
    <div class="cart">
        <h1 class="cart__text">
          CARRINHO DE COMPRAS
        </h1>

        <div
          class="cart__itens"
          v-if="cartContent.length === 0"
        >
          <p>
            Você ainda não adicionou nenhum produto no seu carrinho :(
          </p>
        </div>

        <div
          class="cart__itens"
        >
            <ItemCard
              v-for="product in cartContent"
              :key="product.id"
              :item="product"
            />

            <Finish v-if="finish"/>
        </div>

        <section
          v-if="cartContent.length > 0 && !finish"
          class="cart__bottom"
        >
          <div class="cart__bottom__info">
            <FinalCart />
          </div>

          <div class="cart__bottom__btn">
            <router-link
              :to="{ name: 'checkout' }"
              class="cart__bottom__btn--link"
            >
              <Button
                btn-text="FINALIZAR"
                backColor="#3a3a3a"
                color="white"
              />
            </router-link>
            <router-link
              :to="{ name: 'products' }"
              class="cart__bottom__btn--link"
            >
              <Button
                btn-text="CONTINUAR COMPRANDO"
              />
            </router-link>
          </div>
        </section>
    </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import ItemCard from '../components/cartComponents/ItemCard.vue'
  import Button from '../components/common/Button.vue'
  import FinalCart from '../components/cartComponents/FinalCart.vue'

  export default {
    name: 'Cart',

    data() {
      return {
        finish: false,
      }
    },

    components: {
      ItemCard,
      Button,
      FinalCart,
    },

    computed: {
      ...mapGetters([
        'cartContent'
      ]),
    },
  }
</script>

<style lang="scss" scoped>
.cart {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  margin: 3rem 6rem;
  min-height: calc(100vh - 416px);

  @media screen and (max-width: 768px) {
    margin: 1.5rem;
  }

  &__text {
    font-size: 1.5rem;
    font-weight: 700;
  }

  &__bottom {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    border-top: 1px solid #e5e3e3;
    margin-top: 2rem;

    &__info {
      background-color: #F8F8F8;
      padding: 1.5rem;
      margin-top: 2rem;
      width: 50%;

      @media screen and (max-width: 768px) {
        width: 100%;
      }
    }

    &__btn {
      margin-top: 2rem;
      width: 20%;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;

      @media screen and (max-width: 768px) {
        width: 100%;
      }

      &--link {
        text-decoration: none;
      }
    }
  }
}
</style>