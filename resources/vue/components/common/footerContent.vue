<template>
  <div class="footer-content">
    <section class="footer-content__columns">
      <h1 class="footer-content__columns--label">
        {{ footerLabel }}
      </h1>

      <div class="footer-content__columns--list">
        <a
          class="footer-content__columns--list__text"
          v-for="text in footerText"
          :key="text.id"
          :href="text.url"
        >
          {{ text.name }}
        </a>
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    name: 'footerContent',

    props: {
      footerLabel: {
        default: 'SHOP'
      },
      footerText: {
        default: () => []
      },
    },
  }
</script>

<style lang="scss" scoped>
.footer-content {
  &__columns {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1rem;

    &--label {
      margin-top: 0.2rem;
      font-size: 0.875rem;
      color: #cdcdcd;
    }

    &--list {
      display: flex;
      flex-direction: column;
      align-items: flex-start;

      &__text {
        text-decoration: none;
        color: #3a3a3a;
        font-size: 0.875rem;
        transition: all 0.2s ease;

        &:hover {
          font-weight: 700;
        }
      }
    }
  }
}
</style>