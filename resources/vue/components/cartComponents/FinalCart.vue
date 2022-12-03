<template>
    <div class="final-cart">
        <div class="final-cart__column">
            <p>Subtotal</p>
            <p>R$ {{ finalCartPrices }}</p>
        </div>

        <div class="final-cart__column">
            <p>Entrega</p>
            <p>Grátis</p>
        </div>

        <div class="final-cart__column--total">
            <p>TOTAL</p>
            <p>R$ {{ finalCartPrices }}</p>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
  name: "FinalCart",

  computed: {
    ...mapGetters([
      'finalCartPrices',
    ])
  },

  created() {
    this.finalCartValue(); 
  },

  methods: {
    ...mapActions([
      'finalCartValue',
    ])
  }
};
</script>

<style lang="scss" scoped>
.final-cart {
    &__column {
      font-size: 0.75rem;
      font-weight: 600;
      display: flex;
      justify-content: space-between;

      p {
        margin-bottom: 0;
      }

      &--total {
        font-size: 0.75rem;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;

        p {
          margin-bottom: 0;
        }
      }
    }
}
</style>
