<template>
    <header class="header">
        <section class="header__logo-container">
            <div>
                <span
                    v-if="!homepage"
                    class="material-symbols-outlined header__logo-container__icon"
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

            <span class="material-symbols-outlined header__logo-container__icon">
              shopping_bag
            </span>
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
  export default {
    name: 'headerComponent',

    computed: {
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

        &__icon {
            cursor: pointer;
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