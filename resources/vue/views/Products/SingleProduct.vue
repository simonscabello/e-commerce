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
            <Button
              btnText="COMPRAR"
              :btnPrice="product.price"
              buyBtn
              class="single-product__details__btn"
            />
            <p class="single-product__details__description">
              {{ product.description }}
            </p>
        </section>
    </div>
</template>

<script>
import Button from '../../components/common/Button.vue'

export default {
    name: "SingleProduct",

    components: {
      Button,
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
    width: 100%;
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
  }
}
</style>
