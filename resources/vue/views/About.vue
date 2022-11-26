<template>
    <div class="about">
        <div class="about__text">
            <h1>SOBRE</h1>
            <p>
                {{ text }}
            </p>
        </div>

        <div class="about__img">
            <img src="../../assets/img/about-img.jpg" alt="">
        </div>
    </div>
</template>

<script>
    export default {
        name: 'About',

        data() {
            return {
                text: 'Modern and fashionable sunglasses are an essential accessory for any modern man or woman. They are an essential part of every wardrobe, and it is important to have a very good pair of sunglasses in order to look good. The latest in sunglasses styles from the worlds best designers. From iconic aviator styles to sophisticated cat-eye designs, find the perfect pair for any occasion. In todays world of fashion, its difficult to choose the right shades. Check out these stylish sunglasses that can be worn in any occasion.'
            };
        },
    }
</script>

<style lang="scss" scoped>
.about {
    min-height: calc(100vh - 416px);
    display: flex;
    align-items: flex-start;
    flex-direction: row;

    @media screen and (max-width: 768px) {
      flex-direction: column;
    }

    &__text {
      margin: 2rem;
      order: unset;

      @media screen and (max-width: 768px) {
        order: 2;
      }

      h1 {
        font-size: 1.5rem;
        font-weight: 700;
      }
    }

    &__img {
      img {
        height: 660px;
        order: unset;

        @media screen and (max-width: 768px) {
        order: 1;
        height: unset;
        width: 100vw;
      }
      }
    }
}
</style>
