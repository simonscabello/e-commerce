<template>
    <header class="header">
        <section class="header__logo-container">
            <div>
                <span
                    v-if="!homepage"
                    class="material-symbols-outlined"
                    @click="goBack"
                >
                  keyboard_backspace
                </span>
            </div>

            <a href="/">
                <img
                    class="header__logo-container__img"
                    src="../../../assets/img/logo.png"
                >
            </a>

            <div class="header__logo-container__bag">
              <router-link :to="{ name: 'cart' }">
                <span class="material-symbols-outlined">
                  shopping_bag
                </span>
              </router-link>

              <div
                v-if="cartLength"
                class="header__logo-container__bag--itens"
              >
              </div>  
            </div>        
        </section>

        <nav class="header__list-container">
            <div class="header__list-container__links">
                <router-link :to="{ name: 'products' }">
                  Produtos
                </router-link>
                <router-link :to="{ name: 'about' }">
                  Sobre
                </router-link>
                <router-link :to="{ name: 'cart' }">
                  Carrinho
                </router-link>
            </div>
        </nav>
    </header>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    name: 'headerComponent',

    computed: {
      ...mapGetters([
        'cartLength'
      ]),

      homepage() {
        return this.$route.path === '/' ? true : false;
      }
    },

    methods: {
      goBack() {
        return this.$router.go(-1);
      }
    }
  }
</script>

<style lang="scss" scoped>
.header {
    background-color:#f8f8f8;
    color: #3a3a3a;

    &__logo-container{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;

        &__img {
          width: 175px;
        }

        .material-symbols-outlined {
          cursor: pointer;
          text-decoration: none;
          color: #3a3a3a;
        }

        &__bag {
          position: relative;

          &--itens {
            position: absolute;
            bottom: 5px;
            right: 0px;
            color: white;
            background-color: #3a3a3a;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transform-origin: 50% 50%;
            animation: jump .5s linear alternate 2 forwards;
          }

          @keyframes jump {
            0%   {transform: translate3d(0,0,0) scale3d(1,1,1);}
            40%  {transform: translate3d(0,30%,0) scale3d(.7,1.5,1);}
            100% {transform: translate3d(0,100%,0) scale3d(1.5,.7,1);}
          }
        }
    }

    &__list-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 0.5rem;

        &__links {
            display: flex;
            align-items: center;
            gap: 2rem;

            a {
                text-decoration: none;
                color: #3a3a3a;
                font-weight: 500;
                transition: all 0.2s ease-in-out;

                &:hover {
                  font-weight: 700; 
                }
            }
        }
    }
}
</style>