<template>
    <div class="home-photos">
        <section class="home-photos__imgs">
            <div class="home-photos__imgs__img1" />
            <div class="home-photos__imgs__img2" />
        </section>

        <section class="home-photos__bottom">
            <p class="home-photos__bottom__text">
                {{ text }}
            </p>
            <Button btn-text="COMPRAR" />
        </section>
    </div>
</template>

<script>
    import Button from '../common/Button.vue'

    export default {
        name: "HomePhotos",

        components: {
            Button,
        },

        data() {
            return {
                text: 'Tem algo pra cada um aqui na STORE, se encante com nossa nova coleção de verão e escolha seu óculos! Nossa incrível equipe de design escolheu seu novo acessório favorito de 2022.'
            };
        },
    }
</script>

<style lang="scss" scoped>
.home-photos {
   &__imgs {
     height: 650px;
     display: flex;
     align-items: center;
     justify-content: center;
     gap: 1rem;

      &__img1 {
        background-image: url(../../../assets/img/home-1.jpg);
        background-position: top;
        background-size: cover;
        height: 100%;
        width: 100%;
      }

      &__img2 {
        background-position: center;
        background-size: cover;
        height: 100%;
        width: 100%;
        background-image: url(../../../assets/img/home-2.jpg);
      }
   }

   &__bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 1.5rem 1rem;

      &__text {
        width: 400px;
        font-size: 0.875rem;
        font-weight: 700;
        line-height: normal;
      }
   }
}
</style>