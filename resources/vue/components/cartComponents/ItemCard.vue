<template>
  <div class="item-card">
    <div class="item-card__column">
      <img
      class="item-card__column__img"
      :src="item.url"
    >
    </div>

    <div class="item-card__column--info">
      <div>
        <p class="item-card__column__title">
          {{ item.name }}
        </p>
        <p class="item-card__column__title--brand">
          {{ item.brand }}
        </p>
      </div>

      <p
        class="item-card__column__title--action"
        @click="updateCart(item.id)"
      >
        Remover
      </p>
    </div>

    <div class="item-card__column">
      <p class="item-card__column__title">
        QTD
      </p>

      <div class="item-card__column__qtd">
        <p class="item-card__column__qtd--text">
          {{ quantity }}
        </p>
      </div>
    </div>

    <div class="item-card__column">
      <p class="item-card__column__title">
        VALOR
      </p>
        R$ {{ item.price }}
    </div>
  </div>
</template>

<script>
  import { mapActions } from 'vuex';

  export default {
    name: 'itemCard',

    props: {
      item: {
        type: Object, Array,
      },
    },

    data() {
      return {
        quantity: 1,
        finalPrice: null,
      }
    },

    methods: {
      ...mapActions([
        'updateCart',
      ]),
    }
  }
</script>

<style lang="scss" scoped>
.item-card {
  display: grid;
  grid-template-columns: repeat(4, auto);
  gap: 6rem;
  margin-top: 3rem;

  @media screen and (max-width: 768px) {
    column-gap: 1rem;
    grid-template-columns: auto auto;
    row-gap: 0.5rem;
    margin-top: 1rem;
  }

  p {
    margin: 0;
  }

  &__column {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.5rem;

    @media screen and (max-width: 768px) {
      gap: 0.5rem;
    }
    
    &--info {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: space-between;
    }

    &__img {
      height: 200px
    }

    &__title {
      font-weight: 700;
      font-size: 0.875rem;

      &--brand {
        font-size: 0.75rem;
        color: #a5a5a5;
      }

      &--action {
        font-size: 0.75rem;
        color: #a5a5a5;
        font-weight: 600;
        cursor: pointer;
      }
    }

    &__qtd {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.2rem;
      align-self: center;

      &--text {
        font-size: 0.875rem;
        font-weight: 600;
      }

      .material-symbols-outlined {
        font-size: 0.875rem;
        font-weight: 600;
        color: #a5a5a5;
        margin-bottom: 0.2rem;
        cursor: pointer;
      }
    }
  }
}
</style>