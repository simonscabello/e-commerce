<template>
    <div class="cart">
        <h1 class="cart__text">
          CARRINHO DE COMPRAS
        </h1>

        <!-- <div
          class="cart__itens"
          v-if="cartContent.length === 0"
        >
          <p>
            Você ainda não adicionou nenhum produto no seu carrinho :(
          </p>
        </div> -->

        <div
          class="cart__itens"
        >
            <ItemCard :item="product" />
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

    data() {
      return {
        product: {
          id: 1,
          url: "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661237839cb4c76109f1dca2393c88ef782922733_thumbnail_600x.webp",
          name: "SUNGLASSES SYMPHONY",
          price: "254,00",
          brand: "White",
          description: "Os óculos de sol percorreram um longo caminho desde que eram apenas uma maneira de proteger os olhos do sol. Eles evoluíram para uma forma de moda, com diferentes estilos entrando e saindo de moda. Esta é uma nova versão do clássico óculos de sol. O design fino e forte oferece uma aparência sofisticada, enquanto a ponte nasal flexível proporciona um ajuste confortável e seguro."
        },
      };
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

  &__text {
    font-size: 1.5rem;
    font-weight: 700;
  }
}
</style>