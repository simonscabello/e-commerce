<template>
  <div class="footer">
      <FooterContent
        v-for="info in info"
        :key="info.id"
        :footer-label="info.label"
        :footer-text="info.text"
      />

      <div class="footer__top" @click="backToTop">
        <p>
          TOPO
        </p>
        <span class="material-symbols-outlined">
          expand_less
        </span>
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

    p {
      margin: 0;
      font-weight: 700;
    }
  }
}
</style>