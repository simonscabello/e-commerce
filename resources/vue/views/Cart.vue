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
        </div>
    </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import ItemCard from '../components/cartComponents/ItemCard.vue'

  export default {
    name: 'Cart',

    components: {
      ItemCard,
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
  justify-content: center;
  margin: 3rem;

  @media screen and (max-width: 768px) {
    margin: 1.5rem;
  }

  &__text {
    font-size: 1.5rem;
    font-weight: 700;
  }
}
</style>