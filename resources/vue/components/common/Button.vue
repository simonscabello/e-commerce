<template>
    <button
      :class="{ 'button__buy': buyBtn }"
      class="button"
    >
        <p class="button__text" v-if="buyBtn">
           R$ {{ btnPrice }}
        </p>
        <p class="button__text">
            {{ btnText }}
        </p>
    </button>
</template>

<script>
    export default {
        name: "Button",

        props: {
            btnText: {
              type: String,
              default: 'COMPRAR'
            },
            btnPrice : {
              type: String,
              default: ''
            },
            buyBtn: {
              type: Boolean,
              default: false
            }
        }
    }
</script>

<style lang="scss" scoped>
.button {
    background-color: white;
    padding: 0.2rem 1rem;
    font-size: 0.875rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    border-radius: 2px;
    display: flex;
    align-items: center;
    justify-content: space-between;

    &:hover {
      opacity: 0.75;
      transform: scale(1.1);
    }

    &__text {
      margin: 0;
    }

    &__buy {
      background-color: #3a3a3a;
      color: white;
      font-weight: 500;
      border: none;
      padding: 0.3rem 1rem;

      &:hover {
        opacity: 0.75;
        transform: unset;
      }
    }
}
</style>