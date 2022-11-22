<template>
  <div class="footer">
      <div class="footer__content">
        <FooterContent
          v-for="info in info"
          :key="info.id"
          :footer-label="info.label"
          :footer-text="info.text"
        />

        <div class="footer__content__top" @click="backToTop">
          <p>
            TOPO
          </p>
          <span class="material-symbols-outlined">
            expand_less
          </span>
        </div>
      </div>

      <div class="footer__credits">
        <p>
          Website interface inspired by Maryna Ryzhova's design
        </p>
        <a href="https://www.behance.net/gallery/147132655/E-commerce-marketplace">
         Design Repository here
        </a>
      </div>
  </div>
</template>

<script>
  import FooterContent from './footerContent.vue';

  export default {
    name: 'footerComponent',

    data() {
      return {
        info: [
          {
            label: 'SHOP',
            text: [
              {
                url: '/produtos',
                name: 'Produtos',
              },
              {
                url: '/produtos',
                name: 'Carrinho de compras',
              },
            ]
          },
          {
            label: 'ABOUT',
            text: [
              {
                url: '/sobre',
                name: 'Sobre',
              }
            ]
          },
          {
            label: 'SOCIAL',
            text: [
              {
                url: 'www.instagram.com',
                name: 'Instagram',
              },
              {
                url: 'www.facebook.com',
                name: 'Facebook',
              },
              {
                url: 'www.youtube.com',
                name: 'Youtube',
              }
            ]
          }
        ]
      }
    },

    components: {
      FooterContent,
    },

    methods: {
      backToTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
    }
  }
</script>

<style lang="scss" scoped>
.footer {
  display: flex;
  flex-direction: column;
  align-items: stretch;

  &__content {
    padding: 2rem;
    background-color: #f8f8f8;
    display: grid;
    grid-template-columns: 1fr;
    margin-top: 3rem;

    @media screen and (min-width: 768px) {
      grid-template-columns: 1fr 1fr 1fr auto;
    }

    &__top {
      font-size: 0.875rem;
      color: #cdcdcd;
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      margin-top: 0;

      @media screen and (max-width: 768px) {
        margin-top: 2rem;
      }

      p {
        margin: 0;
        font-weight: 700;
      }
    }
  }

  &__credits {
    align-self: center;
    font-size: 0.75rem;
    display: flex;
    padding: 0.5rem;
    gap: 1rem;

    p {
      margin: 0;
    }

    a {
      text-decoration: none;
      color: gray;
      font-weight: 600;
    }
  }
}
</style>