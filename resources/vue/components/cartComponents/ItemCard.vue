<template>
  <div class="item-card">
    <div class="item-card__column">
      <img
      class="item-card__column__img"
      :src="item.url"
    >
    </div>

    <div class="item-card__column">
      <div>
        <p class="item-card__column__title">
          {{ item.name }}
        </p>
        <p class="item-card__column__title--brand">
          {{ item.brand }}
        </p>
      </div>

      <p>
        Remover
      </p>
    </div>

    <div class="item-card__column">
      <p class="item-card__column__title">
        QUANTIDADE
      </p>

      <div class="item-card__column__qtd">
        <p>
          {{ quantity }}
        </p>
        <span class="material-symbols-outlined">
          add
        </span>
      </div>
    </div>

    <div class="item-card__column">
      <p class="item-card__column__title">
        TOTAL
      </p>
        {{ finalPrice }}
    </div>
  </div>
</template>

<script>
  export default {
    name: 'itemCard',

    props: {
      item: {
        type: Object, Array,
      },
    },

    computed: {
      quantity() {
        return '1'
      },

      finalPrice() {
        return '254,00'
      },
    },
  }
</script>

<style lang="scss" scoped>
.item-card {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 4rem;
  margin-top: 3rem;

  p {
    margin: 0;
  }

  &__column {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.5rem;

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
    }

    &__qtd {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  }
}
</style>