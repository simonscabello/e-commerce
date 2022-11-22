<template>
    <button
      class="button"
    >
        {{ btnText }}
    </button>
</template>

<script>
    export default {
        name: "Button",

        props: {
            btnText: {
                type: String,
                default: 'COMPRAR'
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
    border-radius: 7px;

    &:hover {
      opacity: 0.75;
      transform: scale(1.1);
    }
}
</style>